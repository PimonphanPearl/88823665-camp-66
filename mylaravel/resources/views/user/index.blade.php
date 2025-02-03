@extends('layouts.default_with_menu')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-12">
        <div class="card-header"><h3 class="card-title"></h3></div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Email</th>
                <th style="width: 240px"></th>
              </tr>
            </thead>
            <tbody>
            <!-- ลูปข้อมูล User -->
             <?php foreach ($users as $index => $user) { ?>
              <tr class="align-middle">
                <td>{{ $index+1 }}.</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <!-- Link ตอนกดปุ่ม edit ไปหน้ากรอกข้อมูล edit -->
                  <a href="{{ url('/user/'.$user->id)}}"> 
                    <button class="btn btn-warning">Edit</button>
                  </a>
                  <form action="{{ url('/user') }}" method="post" style="display: inline;">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <button class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-end">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
      <!-- /.card -->
    </div>
</div>
@endsection
