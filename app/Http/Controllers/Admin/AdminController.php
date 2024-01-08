<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;


class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin.admin_dashboard');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function table()
    {
        $data = User::get();
        // print_r($data);
        // return view('admin.table',compact('data'));
        return view('admin.table',compact('data'));

    }
    public function delete($id)
    {
        user::where('id',$id)->delete();
        return redirect()->back()->with('success','User Delete Successfully');

    }

    public function edit($id)
    {
        $edituser=User::where('id',$id)->first();
        return view('admin.editpage',compact('edituser'));
        // return view('admin.editpage');
    }

    public function updateUser(Request $request)
    {
         // dd($request->all());
         User::where('id',$request->id)->update([
            'name' => $request->name ,
            'email' => $request->email,
            

          ]);
        return redirect('/admin-dashboard/table')->with('success','User updated  Successful');
    }




}
