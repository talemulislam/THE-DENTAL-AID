@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.patient.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.patients.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.id') }}
                        </th>
                        <td>
                            {{ $patient->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.name') }}
                        </th>
                        <td>
                            {{ $patient->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.phone') }}
                        </th>
                        <td>
                            {{ $patient->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.optional_phone') }}
                        </th>
                        <td>
                            {{ $patient->optional_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.email') }}
                        </th>
                        <td>
                            {{ $patient->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.optional_email') }}
                        </th>
                        <td>
                            {{ $patient->optional_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.emergency_contact_person') }}
                        </th>
                        <td>
                            {{ $patient->emergency_contact_person }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.emergency_phone') }}
                        </th>
                        <td>
                            {{ $patient->emergency_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.emergency_email') }}
                        </th>
                        <td>
                            {{ $patient->emergency_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.city') }}
                        </th>
                        <td>
                            {{ App\Patient::CITY_SELECT[$patient->city] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.address') }}
                        </th>
                        <td>
                            {{ $patient->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.permanent_address') }}
                        </th>
                        <td>
                            {{ $patient->permanent_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.permanent_city') }}
                        </th>
                        <td>
                            {{ App\Patient::PERMANENT_CITY_SELECT[$patient->permanent_city] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Patient::GENDER_RADIO[$patient->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.no_of_family_member') }}
                        </th>
                        <td>
                            {{ $patient->no_of_family_member }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.date_of_birth') }}
                        </th>
                        <td>
                            {{ $patient->date_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.marital_status') }}
                        </th>
                        <td>
                            {{ App\Patient::MARITAL_STATUS_SELECT[$patient->marital_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.spouse_name') }}
                        </th>
                        <td>
                            {{ $patient->spouse_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.photo') }}
                        </th>
                        <td>
                            @if($patient->photo)
                                <a href="{{ $patient->photo->getUrl() }}" target="_blank">
                                    <img src="{{ $patient->photo->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.patients.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection