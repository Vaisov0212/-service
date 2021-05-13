<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Feedback;
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback=Feedback::all();
        return view('admin.feedback.index', compact('feedback'));
    }


    public function show($id)
    {
        $feedback=Feedback::findOrFail($id);
        $feedback->update(['report'=>true ]);
        return view('admin.feedback.show', compact('feedback'));
    }

    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $feedback=Feedback::findOrFail($id);
        $feedback->delete();
        return redirect()->back()->with('delete','Malumot o`chirildi !');
    }
}
