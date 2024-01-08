<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Session;


class UserController extends Controller
{
    public function index()
    {
        return view('User.user_home');
    }
    public function registerr()
    {
        return view('User.register');
    }
    public function saveregisterr(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'father' => 'required',
            'dob' => 'required',
            // 'email' => 'required',
            'gender' => 'required',
           'photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:1024',
           // 'photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:1024',

           ]);



        //    $photonam = time().'.'.$request->photo->extension();
        //    $request->photo->move(public_path(),$photonam);

           $emp = new Student();
           $emp->name =$request->name;
           $emp->father =$request->father;
           $emp->dob =$request->dob;
           $emp->email =$request->email;
           $emp->gender =$request->gender;
          // $emp->photo =$request->photo;
          if($request->hasfile('photo')){
            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/student/', $filename);
            $emp->photo = $filename;
        }
           $emp->save();
           return redirect('/home')->with('success','student Added Successful');
    }


}
