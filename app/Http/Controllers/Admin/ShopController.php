<?php

namespace App\Http\Controllers\Admin;
use \App\Http\Controllers\Controller;
use \App\shoping;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $detals=shoping::all();
       return view('admin.shop.index',compact('detals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required',
        'money'=>'required',
        'description'=>'required',
        'select_file'=>'required'
        ]);

        // image upload
        $new_name=microtime().".jpg";
        $img=Image::make($request->file('select_file'));

        $watermark= Image::make('img/logo.png');
        $img->fit(500, 360, function($constraint){
            $constraint->aspectRatio();
        });
        $img->insert($watermark, 'bottom-right');
        $img->save('upload/shop_images/'.$new_name);

        $detal=new Shoping([
            'name'=>$request->get('name'),
            'money'=>$request->get('money'),
            'description'=>$request->get('description'),
             'shop_img'=>$new_name
        ]);
        $detal->save();
        return redirect()->back()->with('success','mofaqiyatli qo`shildi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detal=Shoping::findOrFail($id);
        return view('admin.shop.show',compact('detal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detal=shoping::findOrFail($id);
        return view('admin.shop.edit',compact('detal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $detal= shoping::findOrFail($id);
        $this->validate($request,[
            'name'=>'required',
            'money'=>'required',
            'description'=>'required'
        ]);

        if($request->file('select_file'))
        {
            Storage::disk('/public')->delete('/upload/shop_images/'.$detal->shop_img);

            //  image upload
            $new_name=microtime().".jpg";
            $img=Image::make($request->file('select_file'));

            $watermark= Image::make('img/logo.png');
            $img->fit(500, 360, function($constraint){
                $constraint->aspectRatio();
            });
            $img->insert($watermark, 'bottom-right');
            $img->save('upload/shop_images/'.$new_name);

        }
        else{
              $new_name=$detal->shop_img;
            }

        $detal->update([
                'name'=>$request->post('name'),
                'description'=>$request->post('description'),
                'money'=>$request->post('money'),
                'img'=>$new_name
        ]);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detal=shoping::findOrFail($id);
        $detal->delete();
        return redirect()->back()->with('delete','malumot o`chirildi');
    }
}
