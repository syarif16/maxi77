@extends('layouts.app2')

@section('content')

<form action="/searching" method="post">
	<h3 align="center">Cari Bis</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tujuan </div>
	<select name="tujuan" style="width:200px">
		<option>Pilih</option>
		<option>Surabaya</option>
		<option>Malang</option>
		<option>Jogja</option>
		<option>Bali</option>
	</select><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Berangkat </div>
	<input type="date" name="tanggalBerangkat" style="width:200px"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
		
	Tanggal Pulang</div>
	<input type="date" name="tanggalPulang" style="width:200px"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Jumlah Kursi</div>
	<div class="input-field">
		<select id="accessRight" name="accessRight" class="required" required="" style="width:200px">
			<option value=""> Pilih </option>
			<option value="1"> < 50 </option>
			<option value="2"> > 50 </option>
		</select>
	</div><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"></div>
	<a href="/" class="btn btn-warning" role="button">Cancel</a>
	<a href="/hasil" class="btn btn-primary" role="button">Cari</a>


	{{ csrf_field() }}

</form>
@endsection
