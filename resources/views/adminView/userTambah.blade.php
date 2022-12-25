@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Tambah User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item">Kelola User</li>
            <li class="breadcrumb-item"><a href="/dashboard/user">Data User</a></li>
            <li class="breadcrumb-item active">Tambah Data User</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">*Tambah Data User</h5>

                    <!-- No Labels Form -->
                    <form class="row g-3" action="/dashboard/user" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama" value="{{old('nama')}}" autofocus>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{old('username')}}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!-- <div class="col-md-4">
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div> -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/user" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form><!-- End No Labels Form -->

                </div>
            </div>
        </div>
    </div>
</div>

@endsection