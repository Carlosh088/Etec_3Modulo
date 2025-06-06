<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize(): bool
 {
 return true;
 }
 public function rules(): array
 {
 $userId = $this->route('user');
 return [
 'name' => 'required',
 'email' => 'required|email|unique:users,email,' . ($userId ?
$userId->id : null),
 'password' => 'required|min:6',
 ];

 
    /**
     * Determine if the user is authorized to make this request.
     */
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
}
public function messages(): array
 {
 return[
 'name.required' => 'Campo nome é obrigatório!',
 'email.required' => 'Campo e-mail é obrigatório!',
 'email.email' => 'Necessário enviar e-mail válido!',
 'email.unique' => 'O e-mail já está cadastrado!',
 'password.required' => 'Campo senha é obrigatório!',
 'password.min' => 'Senha com no mínimo :min caracteres!',
 ];
 }
}




