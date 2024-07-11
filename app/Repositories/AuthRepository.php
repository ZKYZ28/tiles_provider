<?php

namespace App\Repositories;

use App\Models\NewsLetter;
use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements AuthRepositoryInterface
{
    public function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function checkIfAlreadyRegistered($email)
    {
        return DB::table('users')
            ->where('email', $email)
            ->exists();
    }

    public function saveNewUser($user) {
        return $user->save();
    }

    public function updatePassword($user, $newPassword) {
        $hashedPassword = Hash::make($newPassword);
        $user->password = $hashedPassword;

        return $user->save();
    }

    public function addToNewsLetter($user) {
        Newsletter::create([
            'user_id' => $user->id,
            'wallet_id' => session()->get('currentWallet')->id,
        ]);
    }
}
