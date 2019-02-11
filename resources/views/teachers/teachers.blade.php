@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-md-12 table-responsive">
		
		<table class="table table-bordered table-hover">
                        <thead>
                                <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                </tr>
                        </thead>
                        <tbody>
                                @foreach ($teachers as $key=>$value)
                                    <tr>
                                        <td>{{$value->name}}</td><td>{{$value->email}}</td><td>{{$value->role}}</td>
                                       
                                    </tr>
                                @endforeach
                                
                        </tbody>
                </table>
		
	</div>
</div>

@endsection