<?php

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

    public function createContact($request)
    {
        return $this->contactRepository->createContact($request);
    }
}
