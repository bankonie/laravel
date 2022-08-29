@extends('backend.layouts.main_template')
@section('title') EmployeesList @parent
@endsection
@section('content')
<div>
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="mb-3">
                            {{ $employees->links('pagination::bootstrap-4');}}
                        </div>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Full name</th>
                          <th>Gender</th>
                          <th>Email</th>
                          <th>Tel</th>
                          <th>Age</th>
                          <th>Address</th>
                          <th>Avartar</th>
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
                          <td>{{ $employee->address }}</td>
                          <td><img src="{{ $employee->avartar }}" width="50"></td>
                          <td>{{ $employee->status }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Avartar</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>
                      </table>

                      <div class="mt-3">
                        {{ $employees->links('pagination::bootstrap-4');}}
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
          <!-- /.content -->
</div>
@endsection