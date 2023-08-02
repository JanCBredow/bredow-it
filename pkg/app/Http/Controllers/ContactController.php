<?php

namespace App\Http\Controllers;

use Livewire\Livewire;
use Redirect;
use Session;

class ContactController extends Controller
{
    public function contact(){
        return view('landing.contact');
    }

    public function thankYou(){
        return Redirect::back();
    }
}
