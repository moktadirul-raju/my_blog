<?php

namespace App\Http\Controllers\Admin;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ContactController extends Controller
{
	public function index(){
		$contacts = Contact::all();
		return view('admin.contacts',compact('contacts'));
	}

	public function store(Request $request){
		DB::table('contacts')->insert(
    		['mobile' => $request->mobile, 
    		'email' => $request->email,
    		'address' => $request->address,
    	]);
    	return redirect()->route('admin.contacts.index')->with('success','Contact Information Saved Successfully');
	}

	public function edit($id){
		$contact = Contact::find($id);
		return view('admin.contacts',compact('contact'));
	}

	public function update(Request $request, $id){
		DB::table('contacts')
            ->where('id', $id)
            ->update(['mobile'  => $request->mobile,
        				'email' => $request->email,
        				'address' => $request->address,
        			]);
            return redirect()->route('admin.contacts.index')->with('success','Contact Information Updated Successfully');
	}

	public function delete($id){
		DB::table('contacts')->delete($id);
		return redirect()->route('admin.contacts.index')->with('success','Contact Information Deleted Successfully');
	}
    
}
