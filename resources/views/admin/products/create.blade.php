@extends('layouts.admin')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class = 'content'>
    	<div class="container-fluid">
            <form enctype="multipart/form-data" method="post" action="{{ route('admin.products.store')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                    <div class="row">
                      <label class = "col-md-3">
                        User
                      </label>
                     <div class="col-md-4"> 
                      <select name="user_id" class="form-control">
                      <option value="">Choose email</option>
                      @foreach($member as $c)
                      <option value='{{$c->id}}'>{{$c->email}}</option>
                      @endforeach
                      </select>
                      </div>
                    <div class="clearfix"></div> 
                    </div>
                  </div>
                <div class="form-group">
                  <div class="row">
                    <label class = "col-6 col-md-3">
                        Brand Name
                      </label>
              
                     <div class="col-md-4"> 
                      <input type="text" name="brand_name" class="form-control"> 
                      </div>
                    <div class="clearfix"></div> 
                  </div>
                  <div class="row">
                    <label class = "col-6 col-md-3">
                        Model name
                      </label>
              
                     <div class="col-md-4"> 
                      <input type="text" name="generic_name" class="form-control"> 
                      </div>
                    <div class="clearfix"></div> 
                  </div>
                  <div class="row">
                    <label class = "col-6 col-md-3">
                        Image
                      </label>
              
                     <div class="col-md-4"> 
                      <input type='file' name='image'> 
                      </div>
                    <div class="clearfix"></div> 
                  </div>
                  <div class="row">
                    <label class = "col-6 col-md-3">
                        Category
                      </label>
              
                     <div class="col-md-4"> 
                      <div class="form-group">
  <select class="form-control" id="sel1" name='category'>
    <option>Guitar</option>
    <option>Keyboard</option>
    <option>Drums</option>
  </select>
</div>
 
                      </div>
                    <div class="clearfix"></div> 
                  </div>
                  <div class="row">
                    <label class = "col-6 col-md-3">
                        rent days
                      </label>
              
                     <div class="col-md-4"> 
                      <input type="text" name="rent_days" class="form-control"> 
                      </div>
                    <div class="clearfix"></div> 
                  </div>
                  <div class="row">
                    <label class = "col-6 col-md-3">
                        Total
                      </label>
              
                     <div class="col-md-4"> 
                      <input type="text" name="total" class="form-control"> 
                      </div>
                    <div class="clearfix"></div> 
                  </div>
                </div>
           <div class="form-group">
            <input type="submit" name = "SAVE" class="btn btn-info">
           </div>
            </form> 
    	</div>
    </section>
@endsection