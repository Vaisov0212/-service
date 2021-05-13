<?php

namespace App\Http\Controllers;
use App\Feddback;
use Illuminate\Http\Request;
use App\Services\SendTelegramService;
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

        $data=$request->validate([
            'name'=>'required',
            'phone'=>'required',
            'organization'=>'required',
            'service_type'=>'required',
            'address'=>'required'
        ]);
        // dd($request);
            //Formating
            $message ='Ism: '.$data['name'].PHP_EOL;
            $message .='Xizmat turi:'.$data['service_type'].PHP_EOL;
            $message .='Telefon raqam:'.$data['phone'].PHP_EOL;
            $message .='Manzil: '.$data['address'];

            Feddback::create([
            'name'=>$data['name'],
            'phone'=>$data['phone'],
            'organization'=>$data['service_type'],
            'address'=>$data['address']
        ]);
        //sendToTelegram_bot
        SendTelegramService::send($message);

        return redirect()->back()->with('success','Xabaringgiz jo`natildin bir ozdan so`ng hodimlarimiz siz bilan  bog`lanishadi.!');
    }
}
