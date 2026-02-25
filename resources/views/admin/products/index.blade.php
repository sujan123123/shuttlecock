@extends('layouts.admin')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class = 'content'>
    	<div class="container-fluid">
    	<p>	
    		<a href = "{{ route('admin.products.create') }}" class="btn btn-primary">Add new product </a>
    	</p>
    		<table class = 'table table-bordered table-striped'>
    			<tr>
    				<th>
    					ID
    				</th>
                    <th>
                        User
                    </th>
    				<th>
    					brand_name
    				</th>
    				<th>
    					model
    				</th>
                    <th>
                        category
                    </th>
                    <th>
                        rent days
                    </th>
                    <th>
                        total
                    </th>
                    <th>Action</th>
    			</tr>
                @if(count($products))
    			@foreach($products as $p)
    				<tr>	
    					<th>
    						{{ $p -> id}}
    					</th>
                        <th>
                            {{ $p -> email}}
                        </th>
    					<th>
    						{{$p -> brand_name}}
    					</th>
                        <th>
                            {{ $p -> generic_name}}
                        </th>
                        <th>
                            {{$p -> category}}
                        </th>
                        <th>
                            {{ $p -> rent_days}}
                        </th>
                        <th>
                            {{$p -> total}}
                        </th>

    					<th>
    						<a href = "{{route('admin.products.edit', $p->id)}}" class="btn btn-info"> Edit </a>
    						<a href = "javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger"> Delete </a>
    						<form action="{{route('admin.products.destroy', $p->id)}}" method="post">
    							@method('DELETE')
    							<input type="hidden" name="_token" value="{{ csrf_token() }}">
    						</form>
    					</th>

    				</tr>
    			@endforeach
                @else
                <tr><td colspan="3">No products found</td></tr>
                @endif
    		</table>
    </section>
@endsection