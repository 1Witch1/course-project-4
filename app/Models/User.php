<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    // Указываем таблицу и первичный ключ
    protected $table = 'users';
    protected $primaryKey = 'UserID';

    /**
     * Поля, которые можно массово заполнять.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Name',        // Имя
        'LName',       // Фамилия
        'FName',       // Отчество (nullable)
        'login',       // Логин
        'password',    // Пароль
        'RoleID',      // Ссылка на роль
    ];

    /**
     * Поля, которые должны быть скрыты при сериализации.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',    // Прячем пароль
    ];

    protected $casts = [
        'password'=> 'hashed',
    ];

    /**
     * Связь с моделью Role.
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'RoleID', 'RoleID');
    }
}
