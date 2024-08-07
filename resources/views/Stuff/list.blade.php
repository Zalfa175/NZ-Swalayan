@extends('template.index')

@section('title', "Lihat Barang")

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BARANG</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         
            @if (session('mess'))
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class='card-title'>{{ session('mess') }}</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"> 
                          <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"> 
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                </div>
            @endif

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                              <img style="width= 200px; height= auto;" src="{{ $item->image }}">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->unit }}</td>
                            <td>{{ @$item->category->name }}</td>
                            <td>{{ $item->status == 1 ? 'Tersedia' : 'Sold Out'}}</td>
                            <td>
                                <div class="btn-group">
                                  <a href="/stuffs/{{ $item->id }}">
                                    <button type="button" class="btn btn-warning"><i class="far fa-edit"></i></button>
                                  </a>

                                  <form action="/stuffs/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                  </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection