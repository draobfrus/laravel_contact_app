<?php

namespace App\Repositories\Contact;

interface ContactRepositoryInterface
{
    public function getAllContacts();
    public function getAllDepartments();
    public function createContact($request);
}
