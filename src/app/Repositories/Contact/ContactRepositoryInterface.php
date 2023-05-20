<?php

namespace App\Repositories\Contact;

interface ContactRepositoryInterface
{
    public function getAllContacts();
    public function createContact($request);
}
