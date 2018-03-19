<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Contact;
use DB;

class ContactController extends Controller
{
    public function create(){
    	return view('contact.create');
    }

    public function store(Request $request){
    	$validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/contact/create')
                ->withErrors($validator);
        }

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('message', 'Thank you for contacting us! We will get back to you soon!');
    }

    public function list(){
        $contacts = DB::table('contacts')->paginate(15);
        return view('contact.index', ['contacts' => $contacts]);
    }

    public function view($id){
    	$contact = Contact::find($id);
        if(!isset($contact)) return view('error.404');
        return view('contact.show', ['contact' => $contact]);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contacts');
    }
}
