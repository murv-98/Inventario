<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoLaboratorioStoreRules extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'No_Serie' => 'required',
            'id_laboratorio' => 'required',
            'fecha_Instalacion' => 'required',
            'equipoLab_id' => 'required|min:5|max:10'
        ];
    }
}