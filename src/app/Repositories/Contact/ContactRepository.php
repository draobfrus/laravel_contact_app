<?php

namespace App\Repositories\Contact;

use App\Models\Department;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function getAllContacts()
    {
        return Contact::all();
    }

    public function getAllDepartments()
    {
        return Department::all();
    }

    public function createContact($request)
    {
        return Contact::create($request);
    }
}
