@extends('admin.Layout.sidebar')

@section('form')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home</h1>
    </div>

    <!-- form input data-->
    <div class="form-berita">
        <form action="berita_admin" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">Input Berita</h2>
            <div class="form-group">
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul" value="{{ old('judul')}}">
                @error('judul')
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
            <div class="form-group form-group-textarea mb-md-0">
                <textarea type="text" class="form-control @error('berita') is-invalid @enderror" name="berita" placeholder="berita" value="{{ old('berita')}}"></textarea>
                @error('berita')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
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

</div>
<hr class="sidebar-divider d-none d-md-block">

<div class="table-galeri">
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Foto</th>
            <th>Berita</th>
            <th colspan="3">Aksi</th>
        </tr>

        @foreach($berita as $brt)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $brt->judul }}</td>
            <td>{{ $brt->foto }}</td>
            <td>{{ $brt->berita }}</td>
            <td width="20px">
                <div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>
            </td>
            <td width="20px">
                <a href="{{ $brt->id }}/berita_admin" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
            </td>
            <form action="berita_admin/{{ $brt->id }}" method="post">
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