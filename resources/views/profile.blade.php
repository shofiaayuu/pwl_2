@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Profil Mahasiswa :</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
           Nama Lengkap : {!! $name !!} <br>
           Nama Panggilan : {!! $nama !!} <br>
           NIM : {!! $nim !!} <br>
           Kelas : {!! $kelas !!} <br>
           No.Absen : {!! $absen !!} <br>
           Program Studi : {!! $prodi !!} <br>
           Jurusan : {!! $jurusan !!} <br>
           Universitas : {!! $univ !!} <br>
        </div>
    </div>
    <!-- /.card -->

    </section>
@endsection