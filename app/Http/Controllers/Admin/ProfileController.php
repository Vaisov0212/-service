<?php

namespace App\Http\Controllers\Admin;
use \App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{

    public function index()
    {
        $user=$this->getUser();
        return view('admin.profile.index', compact('user'));
    }


    public function edit(Request $request,$id)
    {
        $request->validate([
            'password' =>'required|string|min:8|confirmed',
        ]);
        $user=User::findOrFail($id);
        $user->update([
            'password' => Hash::make($request->get('password')),
        ]);

        return redirect()->back()->with('success','Paro`l yangilandi...!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|min:3',
            'email'=>'required|email'
        ]);
        $user=User::findOrFail($id);
        $user->update([

            'name'=> $request->post('name'),
            'email'=> $request->post('email')
        ]);
        return redirect()->back()->with('success','Malumotlar o`zgartirildi...!');
    }

    protected function getUser(){
        $id=auth()->user()->id;
        return User::findOrFail($id);
    }
}
