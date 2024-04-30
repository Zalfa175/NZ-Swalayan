@extends('template.index')

@section('title', 'Tambah Customer')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>CUSTOMER</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Customer</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <form action="/customers/{{ @$data->id }}" method="post">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Customer</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if (@$data)
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">Kode</label>
                                <input type="text" class="form-control" name="id" placeholder="Kode"
                                    value="{{ @$data->id }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama"
                                    value="{{ @$data->name }}">
                            </div>
                            <div class="form-group">
                                <label for="adress">Alamat</label>
                                <input type="text" class="form-control" name="adress" placeholder="Alamat"
                                    value="{{ @$data->adress }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputRounded0">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="1"
                                        {{ @$data->gender == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gender">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="2"
                                        {{ @$data->gender == 2 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gender">Perempuan</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="custom-select rounded-0">
                                    <option value="1" {{ @$data->status == 1 ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ @$data->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

        </form>
        <!-- /.content -->
    </div>
@endsection
