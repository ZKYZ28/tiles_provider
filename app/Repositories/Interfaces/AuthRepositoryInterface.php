<?php

namespace App\Repositories\Interfaces;

interface AuthRepositoryInterface
{
    public function findUserByEmail($email);

    public function checkIfAlreadyRegistered($email);

    public function saveNewUser($user);

    public function updatePassword($user, $newPassword);

    public function addToNewsLetter($user);
}
