<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;

class AdminMiddleware extends Middleware
{

    public function handle($request, Closure $next, ...$guards)
    {
        // Сначала вызываем родительский метод handle для проверки аутентификации
        $this->authenticate($request, $guards);

        // Затем проверяем роль пользователя
        if (auth()->user()->role !== 'admin') {
            return response()->json(['message' => 'Доступ запрещён'], 403);
        }

        // Если всё в порядке, продолжаем выполнение запроса
        return $next($request);
    }
}
