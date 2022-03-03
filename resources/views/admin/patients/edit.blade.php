@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.patient.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.patients.update", [$patient->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.patient.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $patient->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.patient.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $patient->phone) }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="optional_phone">{{ trans('cruds.patient.fields.optional_phone') }}</label>
                <input class="form-control {{ $errors->has('optional_phone') ? 'is-invalid' : '' }}" type="text" name="optional_phone" id="optional_phone" value="{{ old('optional_phone', $patient->optional_phone) }}">
                @if($errors->has('optional_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('optional_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.optional_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.patient.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $patient->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="optional_email">{{ trans('cruds.patient.fields.optional_email') }}</label>
                <input class="form-control {{ $errors->has('optional_email') ? 'is-invalid' : '' }}" type="email" name="optional_email" id="optional_email" value="{{ old('optional_email', $patient->optional_email) }}">
                @if($errors->has('optional_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('optional_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.optional_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emergency_contact_person">{{ trans('cruds.patient.fields.emergency_contact_person') }}</label>
                <input class="form-control {{ $errors->has('emergency_contact_person') ? 'is-invalid' : '' }}" type="text" name="emergency_contact_person" id="emergency_contact_person" value="{{ old('emergency_contact_person', $patient->emergency_contact_person) }}">
                @if($errors->has('emergency_contact_person'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emergency_contact_person') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.emergency_contact_person_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emergency_phone">{{ trans('cruds.patient.fields.emergency_phone') }}</label>
                <input class="form-control {{ $errors->has('emergency_phone') ? 'is-invalid' : '' }}" type="text" name="emergency_phone" id="emergency_phone" value="{{ old('emergency_phone', $patient->emergency_phone) }}">
                @if($errors->has('emergency_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emergency_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.emergency_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emergency_email">{{ trans('cruds.patient.fields.emergency_email') }}</label>
                <input class="form-control {{ $errors->has('emergency_email') ? 'is-invalid' : '' }}" type="email" name="emergency_email" id="emergency_email" value="{{ old('emergency_email', $patient->emergency_email) }}">
                @if($errors->has('emergency_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emergency_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.emergency_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.patient.fields.city') }}</label>
                <select class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city" id="city">
                    <option value disabled {{ old('city', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Patient::CITY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('city', $patient->city) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.patient.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address', $patient->address) }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="permanent_address">{{ trans('cruds.patient.fields.permanent_address') }}</label>
                <textarea class="form-control {{ $errors->has('permanent_address') ? 'is-invalid' : '' }}" name="permanent_address" id="permanent_address">{{ old('permanent_address', $patient->permanent_address) }}</textarea>
                @if($errors->has('permanent_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permanent_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.permanent_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.patient.fields.permanent_city') }}</label>
                <select class="form-control {{ $errors->has('permanent_city') ? 'is-invalid' : '' }}" name="permanent_city" id="permanent_city">
                    <option value disabled {{ old('permanent_city', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Patient::PERMANENT_CITY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('permanent_city', $patient->permanent_city) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('permanent_city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permanent_city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.permanent_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.patient.fields.gender') }}</label>
                @foreach(App\Patient::GENDER_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ old('gender', $patient->gender) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="no_of_family_member">{{ trans('cruds.patient.fields.no_of_family_member') }}</label>
                <input class="form-control {{ $errors->has('no_of_family_member') ? 'is-invalid' : '' }}" type="number" name="no_of_family_member" id="no_of_family_member" value="{{ old('no_of_family_member', $patient->no_of_family_member) }}" step="1">
                @if($errors->has('no_of_family_member'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_of_family_member') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.no_of_family_member_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_of_birth">{{ trans('cruds.patient.fields.date_of_birth') }}</label>
                <input class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" type="text" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $patient->date_of_birth) }}" required>
                @if($errors->has('date_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.date_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.patient.fields.marital_status') }}</label>
                <select class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}" name="marital_status" id="marital_status">
                    <option value disabled {{ old('marital_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Patient::MARITAL_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('marital_status', $patient->marital_status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('marital_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marital_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.marital_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="spouse_name">{{ trans('cruds.patient.fields.spouse_name') }}</label>
                <input class="form-control {{ $errors->has('spouse_name') ? 'is-invalid' : '' }}" type="text" name="spouse_name" id="spouse_name" value="{{ old('spouse_name', $patient->spouse_name) }}">
                @if($errors->has('spouse_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('spouse_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.spouse_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo">{{ trans('cruds.patient.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patient.fields.photo_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.patients.storeMedia') }}',
    maxFilesize: 24, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 24,
      width: 40960,
      height: 40960
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($patient) && $patient->photo)
      var file = {!! json_encode($patient->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $patient->photo->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection