@extends('backend.layouts.main_template')
@section('title') Employee List @parent @endsection
@section('content')

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Employees List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Employees List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Fullname</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Tel</th>
                  <th>Age</th>
                  {{-- <th>Address</th> --}}
                  <th>Avatar</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->fullname }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->tel }}</td>
                        <td>{{ $employee->age }}</td>
                        {{-- <td>{{ $employee->address }}</td> --}}
                        <td><img src="{{ $employee->avartar }}" width="50"></td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @endforeach

                </tbody>
              </table>

              <div class="mt-3">
                {{ $employees->links('pagination::bootstrap-4'); }}
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

@endsection