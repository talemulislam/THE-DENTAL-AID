@extends('layouts.admin')
@section('content')
@can('patient_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.patients.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.patient.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Patient', 'route' => 'admin.patients.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.patient.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Patient">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.optional_phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.optional_email') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.emergency_contact_person') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.emergency_phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.emergency_email') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.city') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.address') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.permanent_address') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.permanent_city') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.gender') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.no_of_family_member') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.date_of_birth') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.marital_status') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.spouse_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.photo') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('patient_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.patients.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.patients.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'phone', name: 'phone' },
{ data: 'optional_phone', name: 'optional_phone' },
{ data: 'email', name: 'email' },
{ data: 'optional_email', name: 'optional_email' },
{ data: 'emergency_contact_person', name: 'emergency_contact_person' },
{ data: 'emergency_phone', name: 'emergency_phone' },
{ data: 'emergency_email', name: 'emergency_email' },
{ data: 'city', name: 'city' },
{ data: 'address', name: 'address' },
{ data: 'permanent_address', name: 'permanent_address' },
{ data: 'permanent_city', name: 'permanent_city' },
{ data: 'gender', name: 'gender' },
{ data: 'no_of_family_member', name: 'no_of_family_member' },
{ data: 'date_of_birth', name: 'date_of_birth' },
{ data: 'marital_status', name: 'marital_status' },
{ data: 'spouse_name', name: 'spouse_name' },
{ data: 'photo', name: 'photo', sortable: false, searchable: false },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  $('.datatable-Patient').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});

</script>
@endsection