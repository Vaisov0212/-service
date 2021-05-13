<?php

namespace App\Http\Controllers;
use App\Feedback;
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
            $message .='Tashkilot:'.$data['organization'].PHP_EOL;
            $message .='Xizmat turi:'.$data['service_type'].PHP_EOL;
            $message .='Telefon raqam:'.$data['phone'].PHP_EOL;
            $message .='Manzil: '.$data['address'];

            Feedback::create([
            'name'=>$data['name'],
            'phone'=>$data['phone'],
            'service_type'=>$data['service_type'],
            'organization'=>$data['organization'],
            'address'=>$data['address'],
            'report'=>false
        ]);
        //sendToTelegram_bot
        SendTelegramService::send($message);

        return redirect()->back()->with('success','Xabaringgiz jo`natildi bir ozdan so`ng hodimlarimiz siz bilan  bog`lanishadi.!');
    }
}
