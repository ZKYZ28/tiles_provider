<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'encryptedEmail' => 'required',
            'new-password' => 'required|min:8',
            'confirm-new-password' => 'required|min:8|same:new-password',
        ];
    }

    public function messages()
    {
        return [
            'encryptedEmail.required' => 'Rendez-vous sur la page de connexion pour faire une demande de réinitialisation de mot de passe.',
            'new-password.required' => 'Veuillez saisir un mot de passe.',
            'new-password.min' => 'Le mot de passe doit comporter au moins :min caractères.',
            'confirm-new-password.required' => 'Veuillez confirmer votre mot de passe.',
            'confirm-new-password.min' => 'La confirmation du mot de passe doit comporter au moins :min caractères.',
            'confirm-new-password.same' => 'Le mot de passe et la confirmation doivent être identiques.',
        ];
    }
}
