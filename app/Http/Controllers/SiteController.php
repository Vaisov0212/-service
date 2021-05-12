<?php

namespace App\Http\Controllers;
use App\Feddback;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }



    public function about_us(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function reference(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'organization'=>'required',
            'service_type'=>'required',
            'address'=>'required'
        ]);
        // dd($request);
        $feedback=new Feddback([
            'name'=>$request->post('name'),
            'phone'=>$request->post('phone'),
            'organization'=>$request->post('organization'),
            'service_type'=>$request->post('service_type'),
            'address'=>$request->post('address'),
        ]);
        $feedback->save();

        return redirect()->back()->with('success','Xabaringgiz jo`natildin bir ozdan so`ng hodimlarimiz siz bilan  bog`lanishadi.!');
    }
}
