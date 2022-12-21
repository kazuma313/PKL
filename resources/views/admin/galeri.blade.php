@extends('admin.Layout.sidebar')

@section('form')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- form input data-->
    <div class="form-geleri">
        <form action="galeri_admin" method="post" enctype="multipart/form-data">
        @csrf
            <h2 class="text-center">Halaman Galeri</h2>

            <div class="form-group">
            <input type="text" name="id" class="form-control" value="3" disabled="disabled" /> 
            </div>

            <div class="form-group">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Judul Galeri" value="{{ old('judul')}}">
                @error('nama')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" placeholder="Foto" value="{{ old('foto')}}">
                @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
            <!-- <center>
                                <h5><a href="login_controller/" style="color:#702edb">Kembali ke login</a></h5>
                            </center> -->

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

        </form>
    </div>


    <hr class="sidebar-divider d-none d-md-block">

    <div class="table-galeri">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Foto</th>
                <th colspan="3">Aksi</th>
            </tr>

            @foreach($galeri as $glr)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $glr->galeri->nama }}</td>
                <td>{{ $glr->letak }}</td>
                <td width="20px">
                    <div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>
                </td>
                <td width="20px">
                    <a href="{{ $glr->id }}/galeri_admin" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                </td>
                <form action="berita_admin/{{ $glr->id }}" method="post">
                    @method('delete')
                    @csrf
                    <td width="20px">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- End of Main Content -->
@endsection