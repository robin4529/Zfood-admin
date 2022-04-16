<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Function for home page

   public function showhomepage(){
       return view('frontend.home');
   }

   // function for menu page

   public function showmenu()
   {
        return view('frontend.menu');
   }
   // function for blog method
   public function showblog()
   {
       return view('frontend.blog');
   }
   // function for staff
   public function showstaff()
   {
    return view('frontend.staff');
   }
}

