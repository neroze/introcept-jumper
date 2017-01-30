@extends('layouts.default.index')
@section('content')
<div id="manage">
	@include('blocks.dev')
	<div class="row">
		<a href="/icusers/create" class="btn btn-primary pull-right" >Add New IC User</a>
	</div>
	<br>
	<div class="row">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Manage IC User</h3>
			  </div>
			  <div class="panel-body">
			   	<table class="table table-hover">
				  	<thead>
				  		<tr>
				  			<th>SN</th>
				  			<th>Name</th>
				  			<th>Gender</th>
				  			<th>Email</th>
				  			<th>Phone</th>
				  			<th>Address</th>
				  			<th>Nationality</th>
				  			<th>DOB</th>
				  			<th>Education Background</th>
				  			<th>Mode of Contact</th>
				  			<th>Action</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<tr  v-for="(user, index) in users" >
				  			<td>@{{ index }}</td>
				  			<td>@{{ user[''] }}</td>
				  			<td>@{{ user['1']}}</td>
				  			<td>@{{ user['2']}}</td>
				  			<td>@{{ user['3']}}</td>
				  			<td>@{{ user['4'] }}</td>
				  			<td>@{{ user['5']}}</td>
				  			<td>@{{ user['6']}}</td>
				  			<td>@{{ user['7'] }}</td>
				  			<td>@{{ user['8'] }}</td>
				  			<td>
									<a title="View Detail" @click="view_details($event, user)" class="btn btn-default" data-loading-text="..." href="">
										<i class="glyphicon glyphicon-modal-window text-primary"></i>
									</a>
									<a title="Delete" @click="delete_user($event, index)" class="btn btn-default" data-loading-text="..." href="">
										<i class="glyphicon glyphicon-remove text-danger"></i>
									</a>
				  			</td>
				  		</tr>
				  	</tbody>
					</table>
			  </div>
			  <input type="hidden" id="users" value="{{ $allUsersPagination->toJson() }}">
			</div>
	{{ $allUsersPagination }}
	</div>
	@include('icusers.view')
</div>

@stop