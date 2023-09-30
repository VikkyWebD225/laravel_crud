<?php

namespace App\Http\Controllers;

use App\Models\Usermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class Usermgt extends Controller
{

    // Methods for login , Registration , Logout and redirect to dashboard
    public function login()
    {
        return view('Admin.Login');
    }

    public function loginuser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = Usermodel::where('email', $credentials['email'])->first();

        if ($user) {
            session::put('loginId', $user->id);

            return redirect('Dashboard');
        } else {
            return redirect('login');
        }
    }

    public function register()
    {
        return view('Admin.Register');
    }

    public function registeruser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:school',
            'password' => 'required|min:5|max:15',
            'address' => 'required',
            'phoneno' => 'required'
        ]);


        $user = new Usermodel();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->phoneno = $request->phoneno;

        $res = $user->save();
        if ($res) {
            return redirect()->back()->with('success', 'You have registered Successfully');
        } else {
            return redirect()->back()->with('fail', 'You not entered correct entry');
        }


    }

    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function logout()
    {
        if (session::has('loginId')) {
            session::forget('loginId');
        }
        return redirect('login');

    }

    /////////////////////////ends this methods////////////////////////////

    // CRUD APPlICATIONS /////////////////////////////////

    public function studentpage()
    {


        return view('Admin.create');


    }

    public function creates(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'first' => 'required|max:3',
            'second' => 'required|max:3',
            'dob' => 'required',
            'mobile' => 'required|max:12',
            'gender' => 'required',
        ]);



        $students = new Student();

        $students->firstname = $request->input('first');
        $students->lastname = $request->input('second');
        $students->dob = $request->input('dob');
        $students->mobileno = $request->input('mobile');
        $students->gender = $request->input('gender');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/upload/', $filename);
            $students['image'] = 'upload/' . $filename;
        }

        $res = $students->save();

        if ($res) {
            return redirect()->back()->with('success', 'Inserted Successully');

        } else {
            return redirect()->back()->with('error', 'Not Inserted');
        }



    }







}