@extends('admin.index')

@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="container-fluid">
        <div class="row m-1">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Permissions</h3>
                <a href="{{ route('admin.permissions.create')}}" class="btn btn-success float-right">Add</a>
                <div class="card-header">
                @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
                @endif
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Permissions</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($permissions as $p)
                      <tr>
                        <td>{{ $p->id}}</td>
                        <td>
                             {{ $p->name}}
                        </td>
                        <td class="w-25"><a href="{{ route('admin.permissions.edit',$p->id) }}" class="btn btn-primary">Edit</a></td>
                        <td class="w-25"><a href="" class="btn btn-danger">Delete</a></td>
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