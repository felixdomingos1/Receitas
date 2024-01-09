<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';


    public function index()
    {
        if (Auth::id()) {
            return view('layouts.home');
        }
        return view('auth.signup');
    }

    public function register(Request $request)
    {
        // $this->validator($request->all())->validate();
        try {
             $request-> validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:200', 'unique:users'],
                'userType' => 'required| string|in:usuario,administrador',
                'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',],
            ]);

            $user = $this->create($request->all());

            $this->guard()->login($user); // Faz o login automaticamente após o registro
    
            // return $this->registered($request, $user)
            
            // ?: redirect($this->redirectPath());

            return view('layouts.home');
    
        }catch (ValidationException $e) {
            $errors = $e->validator->errors()->messages();

            return redirect()->back()->withErrors($errors)->withInput();
        }
      
 
    }

    // protected function validator(array $data)
    // {
    //      $validator= Validate::make($data, [
    
    //     ],$this->messages());

    //     if ($validator->fails()) {
    //         $errorMessage = $validator->messages()->messages();
    //         return view('Auth/SignUp', compact('errorMessage'));
    //     }

    //     return $validator;
    // }

    protected function create(array $data)
    {
        return User::create([
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);
    }


    protected function messages()
    {
        return [
            'password.regex' => 'A senha deve conter pelo menos uma letra maiúscula, uma letra minúscula e um número.',
        ];
    }

}
