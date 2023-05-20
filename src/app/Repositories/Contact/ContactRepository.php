<?php

namespace App\Repositories\Contact;

use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function getAllContacts()
    {
        return Contact::all();
    }

    public function createContact($request)
    {
        return Contact::create($request);
    }
}
