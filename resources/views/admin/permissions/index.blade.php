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
                <a href="" class="btn btn-success float-right">Add</a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Roles</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     @foreach($permissions as $p)
                      <td>{{ $p->id}}</td>
                      <td>
                        <div class="progress progress-xs">
                           {{ $p->name}}
                        </div>
                      </td>
                      @endforeach
                    </tr>
                  
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