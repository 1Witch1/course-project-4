<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Указываем таблицу и первичный ключ
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    /**
     * Поля, которые можно массово заполнять.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',        // Имя
        'lname',       // Фамилия
        'fname',       // Отчество (nullable)
        'login',       // Логин
        'password',    // Пароль
        'role_id',      // Ссылка на роль
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
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }
}
