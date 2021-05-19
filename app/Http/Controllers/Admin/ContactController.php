<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=Contact::orderBy('id','desc')->paginate(15);
        $links=$contact->links();
      return view('admin.contact.index',compact('contact','links'));
    }


    public function show($id)
    {
        $contact=Contact::findOrFail($id);
        $contact->update(['views'=>true]);
        return view('admin.contact.show',compact('contact'));
    }


    public function destroy($id)
    {
        $contact=Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back()->with('delete','Xabar o`chirildi...');
    }
}
