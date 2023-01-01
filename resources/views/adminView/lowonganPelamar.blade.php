@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Daftar Pelamar</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/lowongan">Data Lowongan</a></li>
            <li class="breadcrumb-item active">Data pelamar</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Pelamar</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Melamar pada</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pelamar as $data)
                <tr>
                    <td>{{$data->nama_pelamar}}</td>
                    <td>{{$data->no_hp}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                        <a href="/dashboard/lamaran/{{$data->id}}" class="btn btn-primary" title="Detail"><i class="bi bi-eye"></i></a>
                        <a href="/storage/{{$data->cv}}"><button class="btn btn-warning" title="Download CV"><i class="bi bi-download"></i></button> </a>

                        <form action="/dashboard/lamaran/{{$data->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
</div>

@endsection