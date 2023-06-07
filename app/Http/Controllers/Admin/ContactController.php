<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('admin.contacts.index', ['contacts' => $contacts]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back();
    }
}
