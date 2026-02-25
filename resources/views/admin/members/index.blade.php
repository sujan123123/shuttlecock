@extends('layouts.admin')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class = 'content'>
    	<div class="container-fluid">
    	<p>	
    		<a href = "{{ route('admin.members.create') }}" class="btn btn-primary">Add new users</a>
    	</p>
    		<table class = 'table table-bordered table-striped'>
    			<tr>
    				<th>
    					ID
    				</th>
    				<th>
    					Name
    				</th>
    				<th>
    					email
    				</th>
    				<th>
    					location
    				</th>
                    <th>
                        phone number
                    </th>
                    <th>
                        Action
                    </th>
    			</tr>
                @if(count($categories))
    			@foreach($categories as $c)
    				<tr>	
    					<th>{{ $c -> id}}</th>
    					<th>{{ $c -> name}}</th>
                        <th>{{ $c -> email}}</th>
                        <th>{{ $c -> address}}</th>
    					<th>{{$c -> phone}}</th>
    					<th>
    						<a href = "{{route('admin.members.edit', $c->id)}}" class="btn btn-info"> Edit </a>
    						<a href = "javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger"> Delete </a>
    						<form action="{{route('admin.members.destroy', $c->id)}}" method="post">
    							@method('DELETE')
    							<input type="hidden" name="_token" value="{{ csrf_token() }}">
    						</form>
    					</th>

    				</tr>
    			@endforeach
                @else
                <tr><td colspan="3">No members found</td></tr>
                @endif

    		</table>
    </section>
@endsection