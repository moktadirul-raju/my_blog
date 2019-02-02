<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Message;
use App\Contact;
use App\Tag;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request,$post)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->post_id = $post;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        Toastr::success('Comment Successfully Published :)','Success');
        return redirect()->back();
    }

    public function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        Toastr::success('Message Successfully Send :)','Success');
        return redirect()->back();
    }

    public function contact(){
        $contacts = Contact::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('contact',compact('contacts','categories','tags'));
    }

    public function about(){
        $contacts = Contact::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('about',compact('contacts','categories','tags'));
    }
}
