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
	<input type="number" name="telepon"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"> 
	Tanggal Berangkat </div>
	<input type="date" name="tanggalBerangkat"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"> 
	Tanggal Pulang </div>
	<input type="date" name="tanggalPulang"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"> 
	Tujuan </div>
	<input type="text" name="tujuan"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"> 
	idBus </div>
	<select id="idBus" name="idBus" class="required" required="" style="width: 200px">
		<option value="">Pilih</option>
		@foreach($bus as $bus)
		<option value={{$bus->id}}>{{$bus->id}}</option>
		@endforeach
	</select> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"> 
	Jumlah </div>
	<input type="text" name="jumlah"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
		idCari </div>
	<select id="idCari" name="idCari" class="required" required="" style="width: 200px">
		<option value="">Pilih</option>
		@foreach($cari as $cari)
		<option value={{$cari->id}}>{{$cari->id}}</option>
		@endforeach
	</select> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"></div>
	
	<a href="/pemesanan" class="btn btn-warning" role="button">Cancel</a>
	<input type="submit" class="btn btn-primary" name="submit" value="Create">


	{{ csrf_field() }}

</form>
</div>
@endsection
 