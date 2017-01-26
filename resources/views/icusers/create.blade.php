@extends('layouts.default.index')
@section('content')
<div id="app">
	@include('blocks.dev')
	<div class="row">
	<a href="/manage" class="btn btn-primary" >View All IC Users</a>
		<div class="col-md-7">
			@include('icusers.blocks.create_form')
		</div>
		<div class="col-md-5">
			@include('icusers.blocks.recently_added')
		</div>
	</div>
</div>
@stop