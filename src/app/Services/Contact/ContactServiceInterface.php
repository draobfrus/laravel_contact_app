<?php

declare(strict_types=1);

namespace App\Services\Contact;

use Illuminate\Support\Collection;
use App\Models\Contact;

/**
 * Interface ContactService
 * お問い合わせ情報のビジネスロジックを担当するService
 */
interface ContactServiceInterface
{
    /**
     * 全てのお問い合わせデータを取得します。
     *
     * @return Collection
     */
    public function getAllContacts(): Collection;

    /**
     * 全ての部署データを取得します。
     *
     * @return Collection
     */
    public function getAllDepartments(): Collection;

    /**
     * お問い合わせを作成します。
     *
     * @param int $department_id 問い合わせ先部署のID
     * @param string $name 問い合わせた者の氏名
     * @param string $email 問い合わせた者のメールアドレス
     * @param string $content 問い合わせ内容
     * @param int $age 問い合わせた者の年齢
     * @param int $gender 問い合わせた者の性別
     * @return Contact
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact;
}
