<?php

declare(strict_types=1);

namespace App\Repositories\Contact;

use App\Models\Department;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function getAllContacts()
    {
        return Contact::with('department')->orderBy('id', 'desc')->get();
    }

    public function getAllDepartments()
    {
        return Department::all();
    }

    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender)
    {
        $contact = Contact::create([
            'department_id' => $department_id,
            'name' => $name,
            'email' => $email,
            'content' => $content,
            'age' => $age,
            'gender' => $gender
        ]);
        return $contact;
    }
}
