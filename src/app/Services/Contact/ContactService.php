<?php

declare(strict_types=1);

namespace App\Services\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;

class ContactService implements ContactServiceInterface
{
    protected $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function getAllContacts()
    {
        return $this->contactRepository->getAllContacts();
    }

    public function getAllDepartments()
    {
        return $this->contactRepository->getAllDepartments();
    }

    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender)
    {
        return $this->contactRepository->createContact($department_id, $name, $email, $content, $age, $gender);
    }
}
