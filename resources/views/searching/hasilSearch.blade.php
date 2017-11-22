@extends('layouts.app2')

@section('content')

<form action="/pemesanan" method="get">
	<h3 align="center"> BIS TERSEDIA </h3>
	<div class="table-responsive">          
		<table class="table"> {{-- ini table --}}
			<thead>
				<tr>
					
					<th>Tipe Bus</th>
					<th>Seat</th>
					<th>Jumlah Kursi</th>
					<th>Harga</th>
					<th>Fasilitas</th>
					<th>Kuantitas</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($bus as $bus)
				<tr>
					
					<td>
						{{$bus->tipeBus}}
					</td>
					<td>
						{{$bus->seat}}
					</td>
					<td>
						{{$bus->jumlahKursi}}
					</td>
					<td>
						{{$bus->hargaSewa}}
					</td>
					<td>
						{{$bus->fasilitas}}
					</td>
					<td>
						{{$bus->kuantitas}}
					</td>
					<td>
						<a href="pemesanan/create" class="btn btn-info">Sewa
						</a>
					</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
</div>
	{{ csrf_field() }}

</form>
@endsection