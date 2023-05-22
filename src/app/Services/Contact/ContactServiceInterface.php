<?php

namespace App\Services\Contact;

interface ContactServiceInterface
{
    public function getAllContacts();
    public function getAllDepartments();
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender);
}
