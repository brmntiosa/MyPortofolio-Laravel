@extends('site.layouts.main')

@section('title')

@endsection

@section('extra-css')
<!-- start here -->
@endsection

@section('extra-styles')
<!-- start here -->
<style>
    body
{
  background: #000e29;
}

.square_box.box_three {
    background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    opacity: 0.059;
    left: -80px;
    top: -60px;
    width: 500px;
    height: 500px;
    border-radius: 45px;
}

.square_box.box_four {
    background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    opacity: 0.059;
    left: 150px;
    top: -25px;
    width: 550px;
    height: 550px;
    border-radius: 45px;
}

.square_box {
    position: absolute;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    border-top-left-radius: 45px;
    opacity: 0.302;
}
.blog{
  margin-left: 1150px;
  padding: 20px;
}

</style>

@endsection

@section('content')
<!-- start here -->

<div class="container mt-5 danger">
        <h1 class="text-center mb-7 danger"> Data Mahasiswa</h1>
        <div class="card">
          <div class="card-body">

<form action="{{ route('site.profile.postCreate') }}" method="post">
  @csrf
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">nim</label>
    <div class="col-sm-10">
      <input name="nim" type="text" class="form-control" id="inputPassword">
    </div>
    </div>
    <div class="mb-3 row">

    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input name="nama" type="text" class="form-control" id="inputPassword">
    </div>
    </div>
    <div class="mb-3 row">

    <label for="inputPassword" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
      <input name="jurusan" type="text" class="form-control" id="inputPassword">
    </div>
    </div>
    <div class="blog">
    <div class="square_box box_three"></div>
  <div class="square_box box_four"></div>
    <button type="submit" class="btn btn-primary">Create</button>
    </div>
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
