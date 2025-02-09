<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        // Проверяем, является ли запрос API
        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Вы должны авторизоваться, чтобы получить доступ к этой странице.'
            ], 401); // HTTP статус 401
        }

        // Для веб-запросов можно вернуть редирект или кастомное сообщение
        return redirect()->guest(route('login'))->with('error', 'Вы должны авторизоваться, чтобы получить доступ.');
    }
    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
