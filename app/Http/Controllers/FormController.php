<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request){
        $forms = new Form();
        $forms->email = $request->email;    //column name , input name
        $forms->password = $request->password;
        $forms->save();
    }
    public function table(){
        $forms = Form::all();
        return view('table',compact('forms'));
    }
}
