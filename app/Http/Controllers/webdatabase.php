<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formdata;

class webdatabase extends Controller
{
    public function store(Request $request)
    {
        $fname = $request->input('name');
        $email = $request->input('email');
        $phonenum = $request->input('phoneNumber');
        $date = $request->input('date');
        $time = $request->input('time');
        $select = $request->input('select');
        $messa = $request->input('message');

        $formData = new Formdata();
        $formData->name = $fname;
        $formData->email = $email;
        $formData->phonenumber = $phonenum;
        $formData->date = $date;
        $formData->time = $time;
        $formData->persons = $select;
        $formData->message = $messa;
        $formData->save();
    }

    public function team(Request $request)
    {
        $image = $request->input('image');
        $name = $request->input('name');
        $designation = $request->input('designation');

        $request->file->store('image', 'public');
        $formData = new Formdata();
        $formData->image = $image;
        $formData->name = $name;
        $formData->designation = $designation;
    }
}
