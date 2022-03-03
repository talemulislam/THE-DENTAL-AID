<?php

namespace App\Http\Requests;

use App\Patient;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePatientRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('patient_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'name'                     => [
                'max:250',
                'required'],
            'phone'                    => [
                'max:50'],
            'optional_phone'           => [
                'max:50'],
            'emergency_contact_person' => [
                'max:250'],
            'emergency_phone'          => [
                'max:50'],
            'no_of_family_member'      => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647'],
            'date_of_birth'            => [
                'required',
                'date_format:' . config('panel.date_format')],
            'spouse_name'              => [
                'max:250'],
        ];

    }
}
