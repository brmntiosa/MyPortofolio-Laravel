<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getIndex()
    {
        $data['article'] = Contact::first();
        $data['articles'] = Contact::all();
        return view('site.Contact.index', $data);
    }
}
