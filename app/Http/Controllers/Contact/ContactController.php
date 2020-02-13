<?php

namespace App\Http\Controllers\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactValidation;

class ContactController extends Controller
{
    public function store(ContactValidation $request)
    {
        $message = new Contact;
        $message->name = request()->input('name');
        $message->email = request()->input('email');
        $message->message = request()->input('message');
        $message->save();

        Session()->flash('message', ' شكرا لتواصلك معنا عزيزي المستخدم .. نعدك بسرعة الرد على استفسارك .. ');


        return redirect('/#contact_us');
    }


    public function index()
    {
        $messages = Contact::paginate(1);
        return view('/dashboard/contacts/index')->with('messages', $messages);
    }

    public function destroy($id)
    {
        $article =  Contact::find($id);
        $article->delete();
        return redirect('/contacts');
    }
}
