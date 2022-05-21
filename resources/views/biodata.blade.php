
@extends('layout.star')
@section('container')
    @include('partisi.navbar');
	<h1 class="text-center mb-3 mt-3">Selamat Datang Admin</h1>
		<div class="container">
			<div class="row justify-content-center">
                <div class="col-md-6">
                    @if ($pesan = Session::get('berhasil'))
                    <div class="alert alert-success" role="alert">
                        {{ $pesan }}
                      </div>
                    @endif
				<div class="card" style="box-shadow: 1ch 1ch 1ch">
					<div class="card-body">
						<a href="/created" type="button" class="rounded-pill btn btn-outline-success" >Created</a>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Name</th>
									<th scope="col">Gender</th>
									<th class="text-center" scope="col">Actions</th>
								</tr>
							</thead>
							<tbody>
                                @php
                                 $i=1;   
                                @endphp
                                @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
									<td>{{ $row->nama }}</td>
									<td>{{ $row->gender }}</td>
									<td class="text-center">
                                        <a href="/students/{{ $row->id }}" type="button" class="rounded-pill btn btn-outline-warning">Edit</a>
										<a href="/delete/{{ $row->id }}" type="button" class="rounded-pill btn btn-outline-danger">Delete</a>
									</td>
								</tr>
                                @endforeach
							</tbody>
						</table>
					</div>
				</div>
            </div>
			</div>
		</div>
        @endsection