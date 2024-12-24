<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Регистрация пользователя.
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'LName' => 'required|string|max:255',
            'FName' => 'nullable|string|max:255',
            'login' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'Name' => $validatedData['Name'],         // Имя
            'LName' => $validatedData['LName'],       // Фамилия
            'FName' => $validatedData['FName'],       // Отчество (может быть null)
            'login' => $validatedData['login'],       // Логин
            'password' => $validatedData['password'], // Хешируем пароль
            'RoleID' => 2, // Задаем роль по умолчанию, например, пользователь
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
//        $credentials = $request->validate([
//            'Login' => 'required|string',
//            'Password' => 'required|string',
//        ]);

//        return [
//            'a' => User::where('Login', '=', $credentials['Login'])->first(),
//            'b' => Hash::make($credentials['Login'])
//        ];

        if (!Auth::attempt($request->only('login', 'password'))) {
            return response()->json(['message' => 'Неверные данные для входа.'], 401);
        }

        $user = Auth::user();

        $user->api_token = Hash::make(Str::random(60));
        $user->save();

        return response()->json([
            'message' => 'Успешный вход!',
            'token' =>  $user->api_token,
            'user' => $user,
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
