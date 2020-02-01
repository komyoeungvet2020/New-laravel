<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subjectsController extends Controller
{
    public function showSubject(){
        $subjects = [name => 'java',score =>100];
        return view('page.subject');
    }
}
