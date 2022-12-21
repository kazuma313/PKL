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
        <form action="/berita_admin/{{ $berita->id }}" method="post">
            @method('patch')
            @csrf
            <h2 class="text-center">Edit Berita</h2>
            <div class="form-group">
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul" value="{{ $berita->judul }}">
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
                <input type="text" class="form-control @error('berita') is-invalid @enderror" name="berita" placeholder="berita" value="{{ $berita->berita }}">
                @error('berita')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Ubah Data</button>
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
</div>
<!-- End of Main Content -->
@endsection