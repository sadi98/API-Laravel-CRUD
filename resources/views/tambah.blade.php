@extends('layout.star')
@section('container')
    @include('partisi.navbar');
        <h1 class="text-center mb-3 mt-3">Tambah Data Mahasiswa</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="box-shadow: 1ch 1ch 1ch">
                        <div class="card-body">
                            <form action="/insertdata" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Select Gender</label>
                                    <select class="form-select" name="gender" aria-label="Default select example">
                                        <option selected>Open This Select</option>
                                        <option value="F">Female</option>
                                        <option value="M">Male</option>
                                      </select>
                                </div>
                                <a href="/students" class="rounded-pill btn btn-outline-warning">Cancel</a>
                                <button type="submit" class="rounded-pill btn btn-outline-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection