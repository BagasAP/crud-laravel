@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Show Author</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Author
	<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a>
	</div></div>

	<div class="panel-body">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

			<div class="form-group">
				<label class="control-lable">Nama</label>
				<input type="text" name="a" value="{{$author->nama}}" class="form-control" readonly="">
			</div>
		
	</div>
	</div>
</div>
@endsection