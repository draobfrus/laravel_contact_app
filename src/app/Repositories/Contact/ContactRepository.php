<?php

declare(strict_types=1);

namespace App\Repositories\Contact;

use App\Models\Department;
use App\Models\Contact;
use Illuminate\Support\Collection;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getAllContacts(): Collection
    {
        return Contact::with('department')->orderBy('id', 'desc')->get();
    }

    /**
     * @inheritDoc
     */
    public function getAllDepartments(): Collection
    {
        return Department::all();
    }

    /**
     * @inheritDoc
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact
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
