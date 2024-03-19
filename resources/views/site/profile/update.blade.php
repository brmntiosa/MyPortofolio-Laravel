@extends('site.layouts.main')

@section('title')

@endsection

@section('extra-css')
<!-- start here -->
@endsection

@section('extra-styles')
<!-- start here -->


@endsection

@section('content')
<!-- start here -->

<div class="container mt-5">
        <h1 class="text-center mb-7"> Data Mahasiswa</h1>
        <div class="card">
          <div class="card-body">
<div class="mb-3 row">
<form action="{{ route('site.profile.postUpdate', $result ->id) }}" method="post">
  @csrf
    <label for="inputPassword" class="col-sm-2 col-form-label">nim</label>
    <div class="col-sm-10">
      <input value="{{ $result->nim}}" name="nim" type="text" class="form-control" id="inputPassword">
    </div>
    </div>
    <div class="mb-3 row">

    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input value="{{ $result->nama}}" name="nama" type="text" class="form-control" id="inputPassword">
    </div>
    </div>
    <div class="mb-3 row">

    <label for="inputPassword" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
      <input value="{{ $result->jurusan}}" name="jurusan" type="text" class="form-control" id="inputPassword">
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Klik</button>

</form>

</div>
  </div>
@endsection

@section('extra-content')
<!-- start here -->
@endsection

@section('extra-js')
<!-- start here -->
@endsection

@section('extra-script')
<!-- start here -->
@endsection
