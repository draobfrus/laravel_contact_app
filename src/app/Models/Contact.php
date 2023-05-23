<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = ['department_id', 'name', 'email', 'content', 'age', 'gender'];

    /**
     * お問い合わせ先部署を取得
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
