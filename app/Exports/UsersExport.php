<?php

namespace App\Exports;

use App\Contacts;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
class UsersExport implements FromQuery
{

    use Exportable;

   public function __construct(string $first_name, string $mobile,string $email)
    {
        $this->first_name = $first_name;
        $this->mobile = $mobile;
        $this->email = $email;
    }
    public function query()
    {
      
     $contacts=Contacts::select( 'first_name', 'last_name','email','primary_phone')->where('id_user','=',auth()->user()->id)->OrderBy('id','DESC');
       
     if($this->first_name){
        $contacts=$contacts->where("first_name", 'like', '%'.$this->first_name.'%');
     }

    if($this->email){
        $contacts=$contacts->where("email", 'like', '%'.$this->email.'%');
     }
	 
	 if($this->mobile){
        $contacts=$contacts->where("mobile", 'like', '%'.$this->mobile.'%');
     }
   /*print_r($users->toSql());
    print_r($users->getBindings());
    exit;*/
   
       return  $contacts;
        
    }
}
