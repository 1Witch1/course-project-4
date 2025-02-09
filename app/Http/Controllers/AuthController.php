<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Регистрация пользователя.
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'fname' => 'nullable|string|max:255',
            'login' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],         // Имя
            'lname' => $validatedData['lname'],       // Фамилия
            'fname' => $validatedData['fname'],       // Отчество (может быть null)
            'login' => $validatedData['login'],       // Логин
            'password' => $validatedData['password'], // Хешируем пароль
            'role_id' => 2, // Задаем роль по умолчанию, например, пользователь
        ]);

        return response()->json([
            'message' => 'Пользователь успешно зарегистрирован!',
            'user' => $user,
        ], 201);
    }

    /**
     * Авторизация пользователя.
     */
    public function login(Request $request)
    {


//        return [
//            'a' => User::where('Login', '=', $credentials['Login'])->first(),
//            'b' => Hash::make($credentials['Login'])
//        ];

        if (!Auth::attempt($request->only('login', 'password'))) {
            return response()->json(['message' => 'Неверные данные для входа.'], 401);
        }

        $user = Auth::user();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Успешный вход!',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    /**
     * Выход пользователя.
     */
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Вы успешно вышли из системы!',
        ]);
    }
}
