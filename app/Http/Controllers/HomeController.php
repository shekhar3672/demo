<?php

namespace App\Http\Controllers;
use App\Contacts;
use App\User;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $activeContactCnt=Contacts::count();
        $activeUserCnt=User::count();
        return view('dashboard',['userCnt'=>$activeUserCnt,'contactCnt'=>$activeContactCnt]);
    }

    public function fromtend_home()
    {
        echo "test";
        exit;
        //return view('dashboard');
    }
}
