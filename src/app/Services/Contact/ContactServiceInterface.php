<?php

namespace App\Services\Contact;

interface ContactServiceInterface
{
    public function getAllContacts();
    public function getAllDepartments();
    public function createContact($request);
}
