<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin.messages',compact('messages'));
    }

    public function destroy($message)
    {
        $messages = Message::findOrFail($message);
        $messages->delete();
        Toastr::success('messages Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
