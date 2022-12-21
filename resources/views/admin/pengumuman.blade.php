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
        <form action="pengumuman_admin" method="post">
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
                <input type="text" class="form-control @error('sub_judul') is-invalid @enderror" name="sub_judul" placeholder="Sub Judul" value="{{ old('sub_judul')}}">
                @error('sub_judul')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" class="form-control @error('pengumuman') is-invalid @enderror" name="pengumuman" placeholder="Pengumuman" value="{{ old('pengumuman')}}">
                @error('pengumuman')
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

</div>
<hr class="sidebar-divider d-none d-md-block">

<div class="table-galeri">
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Sub Judul</th>
            <th>Pengumuman</th>
            <th colspan="3">Aksi</th>
        </tr>

        @foreach($pengumuman as $pgm)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pgm->judul }}</td>
            <td>{{ $pgm->sub_judul }}</td>
            <td>{{ $pgm->Pengumuman }}</td>
            <td width="20px">
                <div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>
            </td>
            <td width="20px">
                <a href="{{ $pgm->id }}/pengumuman_admin" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
            </td>
            <form action="pengumuman_admin/{{ $pgm->id }}" method="post">
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

<!-- End of Main Content -->
@endsection