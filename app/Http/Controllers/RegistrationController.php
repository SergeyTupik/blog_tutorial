<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //Валидируем поля
        $this->validate(request(), [
            'name' => 'required|min:2|max:100',
            'email' => 'required|min:2|max:100|email|unique:users',
            'password' => 'required|min:2|max:100|confirmed',
        ]);

        //Создаем и срхраняем пользователя
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),

            'password' => bcrypt(request('password'))
        ]);

        //Логиним пользователья

        auth()->login($user);
        //Редирект

        return redirect()->home();

    }
}
