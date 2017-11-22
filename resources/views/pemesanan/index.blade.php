@extends('layouts.app')

@section('content')
<div class="col-md-12">
	 <a href="/pemesanan/create" class="btn btn-info" role="button" > <i class="fa fa-plus"></i> Create</a>
	<div class="table-responsive">          
		<table class="table"> {{-- ini table --}}
			<thead>
				<tr>
					<th>Id</th>
					<th>Nama Pemesan</th>
					<th>Alamat</th>
					<th>No.Telp</th>
					<th>Tipe Bus</th>
					<th>Kuantitas</th>
					<th>Tujuan</th>
					<th>Tanggal Berangkat</th>
					<th>Tanggal Kembali</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pemesanan as $pemesanan)
				<tr>
					<td>
						{{$pemesanan->id}}
					</td>
					<td>
						{{$pemesanan->namaPemesan}}
					</td>
					<td>
						{{$pemesanan->alamatPemesan}}
					</td>
					<td>
						{{$pemesanan->telepon}}
					</td>
					<td>
						{{$pemesanan->tipe}}
					</td>
					<td>
						{{$pemesanan->jumlah}}
					</td>
					<td>
						{{$pemesanan->tujuan}}
					</td>

					<td>
						{{$pemesanan->tanggalBerangkat}}
					</td>
					<td>
						{{$pemesanan->tanggalkembali}}
					</td>
					<td>
						{{$pemesanan->status}}
					</td>
					<td>
						<button class="btn btn-info" onclick="location.href='/pemesanan/{{$pemesanan->id}}/edit';" >Edit
						</button>
					</td>
					<td>
						<form action="/pemesanan/{{$pemesanan->id}}" method="post">
							<input class="btn btn-info" type="submit" name="submit" value="Delete"/>

							{{csrf_field()}}
							<input type="hidden" name="_method" value="delete"/>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection

