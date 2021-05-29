<?php

namespace App\Http\Controllers;

use App\Category;
use App\Feedback;
use Illuminate\Http\Request;
use App\Services\SendTelegramService;
use App\Shoping;
use \App\User;
use \App\Contact;
class SiteController extends Controller
{
    public function index()
    {
         $user=$this->getUser();
        //  dd($user);
        return view('index', compact('user'));
    }



    public function about_us()
    {
        $user=$this->getUser();
        return view('about',compact('user'));
    }

    public function service()
    {
        $user=$this->getUser();
        return view('service',compact('user'));
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

    public function shop($id){
        $user=$this->getUser();
        $fours=Shoping::orderBy('id','desc')->limit(4);
        $category=Category::all();
        if($id==0){
            $model=Shoping::orderBy('id','desc')->paginate(12);
            $links=$model->links();
        }
        else{
        $data=Category::findOrFail($id);
        $model=$data->shoping()->orderBy('id','desc')->paginate(12);
            $links=$model->links();
        }

        return view('market',compact('user','model','links','category','fours'));
    }

    public function shop_show($id){
        $user=$this->getUser();
        $model=Shoping::findOrFail($id);
        $category=Category::all();
        return view('market_show',compact('user','model','category'));
    }

    public function conatct()
    {
        $user=$this->getUser();
        return view('contact',compact('user'));
    }

    public function contactsef(Request $request)
    {
            $this->validate($request,[
                'name'=>'required|min:3',
                'email'=>'required|email',
                'subject'=>'required|max:200',
                'massege'=>'required|min:5',
            ]);

            $contact=new Contact([
                'name'=>$request->post('name'),
                'email'=>$request->post('email'),
                'subject'=>$request->post('subject'),
                'massege'=>$request->post('massege'),
                'views'=>false
            ]);
            $contact->save();
            return redirect()->back()->with('success','habaringgiz jo`natildi...');


    }

        protected function getUser(){
            if(auth()->user()){
                $user_id=auth()->user()->id;
                $user=User::findOrFail($user_id);
                return $user;
            }
            else{
                return $user=null;
            }
        }

        public function switchLang($lang)
        {
            session()->put('lang',$lang);
            return redirect()->back();
        }
}
