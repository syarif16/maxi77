@extends('layouts.app')

@section('content')
<center><h2>LAPORAN PEMASUKAN</h2> </center><br>
<form action="/laporan" method="GET">
	<input type="date" name="tanggalAwal" value="{{ request('tanggalAwal') }}">
	<input type="date" name="tanggalAkhir" value="{{ request('tanggalAkhir') }}">
	<button class="btn btn-default" type="submit">
		<i class="fa fa-search"></i>
	</button>
</form>
<br>

<div class="col-md-12">
	<div class="table-responsive">          
		<table class="table"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id</th>
					<th>Tanggal Transaksi</th>
					<th>Total Pembayaran</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				$total=0;
				?>
				@foreach($transaksi as $transaksi)
				<tr>
					<td>
						{{$transaksi->id}}
					</td>
					<td>
						{{$transaksi->tanggalTransaksi}}
					</td>
					<td>
						{{$transaksi->totalPembayaran}}
					</td>
						<?php $total += $transaksi->totalPembayaran; ?>
					{{csrf_field()}}
				</form>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{-- {{}} --}}
	<div class="col-md-5"></div>
	<label>Total Pemasukan :</label>  {{$total}}
</div>
</div>
</div>

@endsection

