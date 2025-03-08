<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class InscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation des données du formulaire
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'civilite' => 'required',
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'email' => 'required|email',
            'nationalite' => 'required',
            'pays_residence' => 'required',
            'langue_com' => 'required',
            'numero_tel' => 'required|max:20',
            'conferences' => 'required'
        ];
    }

    //Message d'erreur 
    public function messages()
    {
        return [
            'civilite.required' => 'Entrez votre civilité svp',
            'nom.required' => 'Entrez votre nom svp',
            'nom.string' => 'Entrez des chaîne de caractère svp',
            'prenoms.required' => 'Entrez votre prénom svp',
            'prenoms.string' => 'Entrez des chaîne de caractère svp',
            'nationalite.required' => 'Entrez votre nationalité svp',
            'pays_residence.required' => 'Entrez votre pays de résidence svp',
            'langue_com.required' => 'Entrez votre langue de communication svp',
            'email.email' => 'Entrez un format email correct',
            'email.required' => 'Entrez votre email svp',
            'numero_tel.required' => 'Entrez votre numero de telephone svp',
            'numero_tel.max' => 'Entrez un maximum de 20 caractères',
            'conferences.required' => 'Veuillez selectionner au moins une conférence svp'
        ];
    }

    //Capturer les mssages d'erreur dans le formulaire
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'message' => 'Erreur dans le formulaire',
                'data' => $validator->errors()
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
