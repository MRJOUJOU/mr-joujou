<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function liste(){
        return view("admin.contact.liste");
       }

       public function details(){
        return view("admin.contact.show");
       }
}

