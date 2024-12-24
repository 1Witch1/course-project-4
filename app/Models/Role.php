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
    protected $primaryKey = 'RoleID';

    // Поля, которые можно массово заполнять
    protected $fillable = [
        'NameRole',    // Название роли
        'Code',        // Код роли
    ];

    /**
     * Связь с пользователями (каждая роль может иметь несколько пользователей)
     */
    public function users()
    {
        return $this->hasMany(User::class, 'RoleID', 'RoleID');
    }
}
