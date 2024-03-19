@extends('site.layouts.main')

@section('title')
@endsection

@section('extra-css')
    <!-- start here -->
    <style>
        .btn btn-primary btn-sm {
            #button {
                background-color: #34495e;
                width: 100%;
                padding: 5px 0 10px 0;
            }

            #button a {
                text-decoration: none;
                color: #ecf0f1;
                background-color: #16a085;
                width: 100px;
                padding: 5px 10px;
                margin: 5px;
            }
        }
    </style>
@endsection

@section('extra-styles')
    <!-- start here -->
    <style>
        body {
            background: #000e29;
        }

        .alert>.start-icon {
            margin-right: 0;
            min-width: 20px;
            text-align: center;
        }

        .alert>.start-icon {
            margin-right: 5px;
        }

        .greencross {
            font-size: 18px;
            color: #25ff0b;
            text-shadow: none;
        }

        .alert-simple.alert-success {
            border: 1px solid rgba(36, 241, 6, 0.46);
            background-color: rgba(7, 149, 66, 0.12156862745098039);
            box-shadow: 0px 0px 2px #259c08;
            color: #0ad406;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-success:hover {
            background-color: rgba(7, 149, 66, 0.35);
            transition: 0.5s;
        }

        .alert-simple.alert-info {
            border: 1px solid rgba(6, 44, 241, 0.46);
            background-color: rgba(7, 73, 149, 0.12156862745098039);
            box-shadow: 0px 0px 2px #0396ff;
            color: #0396ff;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-info:hover {
            background-color: rgba(7, 73, 149, 0.35);
            transition: 0.5s;
        }

        .blue-cross {
            font-size: 18px;
            color: #0bd2ff;
            text-shadow: none;
        }

        .alert-simple.alert-warning {
            border: 1px solid rgba(241, 142, 6, 0.81);
            background-color: rgba(220, 128, 1, 0.16);
            box-shadow: 0px 0px 2px #ffb103;
            color: #ffb103;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-warning:hover {
            background-color: rgba(220, 128, 1, 0.33);
            transition: 0.5s;
        }

        .warning {
            font-size: 18px;
            color: #ffb40b;
            text-shadow: none;
        }

        .alert-simple.alert-danger {
            border: 1px solid rgba(241, 6, 6, 0.81);
            background-color: rgba(220, 17, 1, 0.16);
            box-shadow: 0px 0px 2px #ff0303;
            color: #ff0303;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-danger:hover {
            background-color: rgba(220, 17, 1, 0.33);
            transition: 0.5s;
        }

        .danger {
            font-size: 18px;
            color: #ff0303;
            text-shadow: none;
        }

        .alert-simple.alert-primary {
            border: 1px solid rgba(6, 241, 226, 0.81);
            background-color: rgba(1, 204, 220, 0.16);
            box-shadow: 0px 0px 2px #03fff5;
            color: #03d0ff;
            text-shadow: 2px 1px #00040a;
            transition: 0.5s;
            cursor: pointer;
        }

        .alert-primary:hover {
            background-color: rgba(1, 204, 220, 0.33);
            transition: 0.5s;
        }

        .alertprimary {
            font-size: 18px;
            color: #03d0ff;
            text-shadow: none;
        }

        .square_box {
            position: absolute;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            border-top-left-radius: 45px;
            opacity: 0.302;
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

        .alert:before {
            content: '';
            position: absolute;
            width: 0;
            height: calc(100% - 44px);
            border-left: 1px solid;
            border-right: 2px solid;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
            left: 0;
            top: 50%;
            transform: translate(0, -50%);
            height: 20px;
        }

        .fa-times {
            -webkit-animation: blink-1 2s infinite both;
            animation: blink-1 2s infinite both;
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

        /**
                                                     * ----------------------------------------
                                                     * animation blink-1
                                                     * ----------------------------------------
                                                     */
        @-webkit-keyframes blink-1 {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        @keyframes blink-1 {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        .aaa {
            margin-left: 1100px;
            padding: 10px;
        }
    </style>
@endsection

@section('content')
    <!-- start here -->


    <div class="container mt-5 danger">
        <h1 class="text-center mb-5 danger"> Data Mahasiswa</h1>
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div>
                        <section>
                            <div class="square_box box_three"></div>
                            <div class="square_box box_four"></div>
                            <div class="container mt-5">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div
                                            class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                                            <button type="button" class="close font__size-18" data-dismiss="alert">
                                                <span aria-hidden="true"><a>
                                                        <i class="fa fa-times greencross"></i>
                                                    </a></span>

                                            </button>
                                            <i class="start-icon far fa-check-circle faa-tada animated"></i>
                                            <strong class="font__weight-semibold">Well done!</strong> Anda berhasil
                                        </div>
                                    </div>
                                </div>
                        </section>

                    </div>
                @elseif (session('error'))
                    error
                @endif
                <div class="aaa">
                    <a href="{{ route('site.profile.getCreate') }}" class="btn btn-primary btn-sm ">Create data</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>aksi</th>
                        </tr>

                    </thead>

                    <tbody>
                        <div class="square_box box_three"></div>
                        <div class="square_box box_four"></div>
                        @foreach ($list as $item)
                            <tr>
                                <th>{{ $item->id }}</th>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>
                                    <a href="{{ route('site.profile.getUpdate', $item->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <a href="{{ route('site.profile.getDelete', $item->id) }}"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br><br><br><br>
        </div>
        <br><br><br><br><br><br><br>
    </div>
    <div class="p-3" style="max-width: 900px; margin-left:550px;">

        <a href="https://www.itenas.ac.id/" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Klik link
            berikut ini seputar
            kampus saya!
            <hr> https://www.itenas.ac.id/

        </a>
        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
    </div>
@endsection

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')
    <!-- start here -->

    @if (session('success'))
        <script>
            // $(".sr-only").on('click', function(){
            //   alert('omo')
            $("button").fadeOut();
            // });
        </script>
    @endif
@endsection

@section('extra-script')
    <!-- start here -->
@endsection
