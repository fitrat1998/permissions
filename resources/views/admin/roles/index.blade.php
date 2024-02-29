@extends('admin.index')

@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="container-fluid">
        <div class="row m-1">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Roles</h3>
                <a href="" class="btn btn-success float-right">Add</a>
              </div>
              <div class="card-header">
              	
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Roles</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($roles as $r)
                    <tr>
                      <td>{{ $r->id}}</td>
                      <td>
                           {{ $r->name}}
                      </td>
                      <td class="w-25">Edit</td>
                      <td class="w-25">Delete</td>
                    </tr>
                      @endforeach
                  
                  </tbody>
                </table>
              </div>
            
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
</section>
</div>
@endsection