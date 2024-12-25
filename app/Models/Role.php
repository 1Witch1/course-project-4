<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Указываем явное имя таблицы, если оно не совпадает с именем модели во множественном числе
    protected $table = 'roles';

    // Указываем явный первичный ключ
    protected $primaryKey = 'role_id';

    // Поля, которые можно массово заполнять
    protected $fillable = [
        'name_role',    // Название роли
        'code',        // Код роли
    ];

    /**
     * Связь с пользователями (каждая роль может иметь несколько пользователей)
     */
    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'role_id');
    }
}
