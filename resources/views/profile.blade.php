@extends('shared.layout')

@section('page_title', 'Profile')

{{-- @section('foto') --}}
	

@section('content')
<div class="row">
	<div class="col-md-3 user-data">
		<h1>Riku Kiranatama</h1>
		<div class="user-image"></div>
	</div>
	
	<table class="table table-striped m-20 user-detail">
		<tbody>
		<tr>
			<th>Nama</td>
				<td>Riku Kiranatama</td>
			</tr>
			<tr>
				<th>Tempat, Tanggal Lahir</td>
				<td>Bandung, 7 Oktober 1989</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</td>
				<td>Pria</td>
			</tr>
			<tr>
				<th>Alamat Domisili</td>
				<td>Jl. Soekarno Hatta No. 104</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection