<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Mail\RegisterMail;
use App\Models\NewsLetter;
use App\Models\Role;
use App\Models\User;
use App\Models\Wallet;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use App\Repositories\Interfaces\WalletRepositoryInterface;
use App\Utils\FormBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    private AuthRepositoryInterface $autRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->autRepository = $authRepository;
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function showResetPassword($encryptedEmail)
    {
        return view('auth.reset_password', ['email' => $encryptedEmail]);
    }

    public function processLogin(LoginRequest $request)
    {
        $credentials = $request->validated();
        $user = $this->autRepository->findUserByEmail($credentials['email']);

        if($user) {
            if(Auth::attempt($credentials)) {
                return redirect()->route('show.my_maps');
            }
        }

        return redirect()->route('login')
            ->with('error', 'Adresse email ou mot de passe incorrects')
            ->withInput();
    }

    public function processRegister(RegisterRequest $registerRequest)
    {
        $formData = $registerRequest->validated();

        if($this->autRepository->checkIfAlreadyRegistered($formData['email'])) {
            return redirect()->route('register')
                ->with('error', 'Un compte avec cette email existe déjà.')
                ->withInput();
        }

        $user = new User();
        $user->email = $formData['email'];
        $user->name = 'user_' . Str::random(16);
        $user->password = Hash::make($formData['password']);
        $this->autRepository->saveNewUser($user);

        //Mail::to($user->email)->send(new RegisterMail($user->role_id == Role::STUDENT, session()->get('currentWallet')));


        if (Auth::loginUsingId($user->id)) {
            return redirect()->route('home');
        }

        return redirect()->route('register');
    }



    public function processResetPassword (ResetPasswordRequest $request) {
        $formData = $request->validated();
        try {
            $email = Crypt::decryptString($formData['encryptedEmail']);
            $user = $this->autRepository->findUserByEmail($email);
            $this->autRepository->updatePassword($user, $formData['new-password']);

            return to_route('wallets_list');
        } catch (DecryptException $e) {
            dd("Raté ;)");
        }
    }

    public function processLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
