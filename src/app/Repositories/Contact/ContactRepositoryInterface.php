<?php

declare(strict_types=1);

namespace App\Repositories\Contact;

interface ContactRepositoryInterface
{
    public function getAllContacts();
    public function getAllDepartments();
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender);
}
