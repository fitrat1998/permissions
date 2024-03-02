@extends('admin.index')

@section('content')
  <div class="content-wrapper">
   <section class="content m-3">
      <div class="container-fluid">
        <div class="row m-3">
          <div class="col-md-12 ">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="">

                <div class="card card-primary m-3">
                <div class="card-header">
                <h3 class="card-title">Update Permission</h3>
                </div>

                <form action="{{ route('admin.roles.update',$permission->id)}}" method="POST">
                  @csrf
                  @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                   <label for="permission">Update permission</label>
                    <input type="text" class="form-control" name="name" id="permission" placeholder="permission" value="{{ $permission->name}}">
                  </div>
                

               
                	<button type="submit" class="btn btn-primary">Update</button>
                
                </form>
                </div>
            
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
</section>
</div>
@endsection