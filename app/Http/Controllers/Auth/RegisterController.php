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
        return view('auth.SignUp');
        if (Auth::id()) {
            return view('layouts.home');
        }
        return view('auth.signup');
    }

  

    public function index()
    {
        if (Auth::id()) {
            return view('layouts.home');
        }
        return view('auth.signUp');
    }


    public function register(Request $request)
    {
        try {
             $request-> validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                // 'userType ' => ['required', 'string|in:usuario,administrador'],
                'email' => ['required', 'string', 'email', 'max:200', 'unique:users'],
                'userType' => 'required| string|in:usuario,administrador',
                'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',],
            ]);

            $user = $this->create($request->all());

            $this->guard()->login($user);
    
            // return $this->registered($request, $user)
            
            // ?: redirect($this->redirectPath());

            return view('layouts.home');
    
        }catch (ValidationException $e) {
            $errors = $e->validator->errors()->messages();

            return redirect()->back()->withErrors($errors)->withInput();
        }
      
 
    }



    protected function create(array $data)
    {
        return User::create([
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'userType'=> $data['userType'],
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
