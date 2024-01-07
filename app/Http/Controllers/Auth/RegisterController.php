<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



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

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('Auth/SignUp');
    }

    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     $this->create($request->all());

    //     return redirect($this->redirectPath());
    // }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $this->guard()->login($user); // Faz o login automaticamente após o registro

        return $this->registered($request, $user)
        ?: redirect($this->redirectPath())->with('errorMessage', $user);
    }

    protected function validator(array $data)
    {
         $validator= Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',],
        ],$this->messages());

        if ($validator->fails()) {
            $errorMessage = $validator->messages()->messages();
            return view('Auth/SignUp', compact('errorMessage'));
        }

        return $validator;
    }

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
