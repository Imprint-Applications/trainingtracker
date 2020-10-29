@extends('layouts.master')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Staff Training</h2>
        <span>A list of training available for staff members.</span>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Training Title</th>
                <th>Requirement</th>
                <th>Department</th>
                <th>Provider</th>
                <th>Refresher</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(function () {

      var table = $('.yajra-datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('trainingShow') }}",
          columns: [
              {data: 'training_title', name: 'training_title'},
              {data: 'training_requirement', name: 'training_requirement'},
              {data: 'department', name: 'department'},
              {data: 'provider', name: 'provider'},
              {data: 'refresher', name: 'refresher'},
              {
                  data: 'action',
                  name: 'action',
                  orderable: true,
                  searchable: true
              },
          ]
      });

    });
  </script>
@endsection
