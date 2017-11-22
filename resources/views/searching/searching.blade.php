@extends('layouts.app2')

@section('content')

<form action="/hasil" method="GET">
	<h3 align="center">Cari Bis</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Berangkat </div>
	<input type="date" name="tanggalBerangkat" value="{{ request('tanggalBerangkat') }}" style="width:200px"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
		
	Tanggal Pulang</div>
	<input type="date" name="tanggalPulang" value="{{ request('tanggalPulang') }}" style="width:200px"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Jumlah Kursi</div>
	<div class="input-field">
		<select name="tipe" value="{{ request('tipe') }}" style="width:200px">
			<option value=""> Pilih </option>
			<option value="Standar"> Standar </option>
			<option value="Eksekutif"> Eksekutif </option>
		</select>
	</div><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"></div>
	<a href="/" class="btn btn-warning" role="button">Cancel</a>
	<input type="submit" class="btn btn-primary" name="submit" value="Search">

	{{ csrf_field() }}

</form>
@endsection
