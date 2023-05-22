<?php

declare(strict_types=1);

namespace App\Services\Contact;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Models\Contact;
use Illuminate\Support\Collection;

class ContactService implements ContactServiceInterface
{
    /**
     * @var ContactRepositoryInterface
     */
    protected $contactRepository;

    /**
     * @param ContactRepositoryInterface $contactRepository リポジトリインターフェイス
     * @return void
     */
    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @inheritDoc
     */
    public function getAllContacts(): Collection
    {
        return $this->contactRepository->getAllContacts();
    }

    /**
     * @inheritDoc
     */
    public function getAllDepartments(): Collection
    {
        return $this->contactRepository->getAllDepartments();
    }

    /**
     * @inheritDoc
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact
    {
        return $this->contactRepository->createContact($department_id, $name, $email, $content, $age, $gender);
    }
}
