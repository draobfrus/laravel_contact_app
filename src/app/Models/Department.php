<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * 部署ごとのお問い合わせを取得
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
