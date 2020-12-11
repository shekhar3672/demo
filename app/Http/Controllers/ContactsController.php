<?php
namespace App\Http\Controllers;
use App\Contacts;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
    
       $contacts=Contacts::where('id_user','=',auth()->user()->id)->orderBy('id','DESC');
 	
		if ($request->ajax()) {
			$search=$request['searchKey'];
			
        $contacts=$contacts->where(function($query) use ($search){
                    $query->where("first_name", 'like', '%'.$search.'%')
                   ->orwhere("middle_name", 'like', '%'.$search.'%')
                   ->orwhere("last_name", 'like', '%'.$search.'%')
                   ->orwhere("email", 'like', '%'.$search.'%');
                   });
				   $contacts=$contacts->paginate(2)
         ->appends(request()->query());
			return view('contacts.cont_list',['contacts'=>$contacts])->with('i', (request()->input('page', 1) - 1) * 2); 
		}
		$contacts=$contacts->paginate(2)
         ->appends(request()->query());
        return view('contacts.index',['contacts'=>$contacts])->with('i', (request()->input('page', 1) - 1) * 2);
    }

    public function create()
    {
        return view('contacts.create_contact');
    }
    
    public function store(ContactsRequest $request)
    {

        
        $contact = new Contacts();
        $contact->first_name = $request->first_name;
        $contact->middle_name = $request->middle_name;
        $contact->last_name = $request->last_name;
        $contact->primary_phone = $request->primary_phone;
        $contact->secondary_phone = $request->secondary_phone;
        $contact->email = $request->email;
        //$contact->image = $request->image;
        if($request->hasfile('image'))
         {

            $image = $request->file('image');

            $path = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath,  $path); 
            $contact->image=$path;
                    
                
         }
        $contact->id_user = auth()->user()->id ;
        $result = $contact->save();
       
        return redirect('contacts')->with('success','contact created successfully!');
    }
    public function edit($id)
    {
        $res = Contacts::all()->find($id);
        return view('contacts.edit_contact',['data'=>$res]);
    }

    public function showDetails($id)
    {
        $res = Contacts::all()->find($id);
        return view('contacts.show_contact',['data'=>$res]);
    }

    public function update(ContactsRequest $request)
    {
        $contact = Contacts::find($request->id);
        $contact->first_name = $request->first_name;
        $contact->middle_name = $request->middle_name;
        $contact->last_name = $request->last_name;
        $contact->primary_phone = $request->primary_phone;
        $contact->secondary_phone = $request->secondary_phone;
        $contact->email = $request->email;
        //$contact->image = $request->image;
        if($request->hasfile('image'))
         {

            $image = $request->file('image');

            $path = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath,  $path); 
            $contact->image=$path;
                    
                
         }
        $contact->id_user = auth()->user()->id ;
        $result = $contact->update();
        
        return redirect('contacts')->with('success','Contact updated successfully!');
    }
    public function destroy(Request $request)
    {
        $conId=$request->con_id;
        $con = Contacts::find($conId);
        $result = $con->delete();
        
        return true;

    }
	
	public function report(Request $request)
    {
        return view('contacts.report_filter');
    }
	
	   /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function download(Request $request)
    {
        $first_name=!empty($request->first_name)?$request->first_name:'';
        $mobile=!empty($request->primary_phone)?$request->primary_phone:'';
        $email=!empty($request->email)?$request->email:'';
      
       
        //if($first_name || $mobile || $email){
            return Excel::download(new UsersExport($first_name,$mobile,$email), 
            'users.xlsx');
  
        /*}else{
            return redirect('reports')->with('error','Please Enter any value to donwload report!');
        }*/
        
    
        
    }
}
