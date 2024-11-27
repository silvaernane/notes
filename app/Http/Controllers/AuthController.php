<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDOException;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate(
            // rules
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'
            ],
            // error messages
            [
                'text_username.required' => 'O username é obrigatório!',
                'text_username.email' => 'Username deve ser um e-mail válido!',
                'text_password.required' => 'A password é obrigatória!',
                'text_password.min' => 'Password deve ter no mínimo :min caracteres!',
                'text_password.max' => 'Password deve ter no máximo :max caracteres!'

            ]
        );

        // get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        // get all the users from the database
        // $users = User::all()->toArray();

        // as an object instance of the models class
        $userModel = new User();
        $users = $userModel->all()->toArray();

        echo '<pre>';
            print_r($users);
        echo '</pre><br>';
    }

    public function logout()
    {
        echo 'logout';
    }
}
