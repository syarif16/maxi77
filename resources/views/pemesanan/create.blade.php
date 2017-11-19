@extends('layouts.app2')

@section('content')
<div class="col-md-12">
<form action="/pemesanan" method="post">
	<h3 align="center">CREATE PEMESANAN</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Nama Pemesan </div>
	<input type="text" name="nama" /> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"> 
	Alamat </div>
	<input type="text" name="alamat"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"> 
	No.Telp </div>
	<input type="text" name="telepon"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tujuan </div>
	<select name="tujuan">
		<option>Pilih</option>
		<option>Surabaya</option>
		<option>Malang</option>
		<option>Jogja</option>
		<option>Bali</option>
	</select><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tanggalBerangkat </div>
	<input type="date" name="tanggalBerangkat"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tanggalPulang </div>
	<input type="date" name="tanggalPulang"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Status </div>
	<select name="status">
		<option>menunggu</option>
		<option>diterima</option>
		<option>batal</option>
	</select> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"></div>
	<a href="/pemesanan" class="btn btn-warning" role="button">Cancel</a>
	<input type="submit" class="btn btn-primary" name="submit" value="Create">


	{{ csrf_field() }}

</form>
</div>
@endsection
 