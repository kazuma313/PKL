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
        <form action=<?= "registration/send_admin_data" ?> method="post">
            <h2 class="text-center">Input Sponsor</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="judul" placeholder="Judul" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="foto" placeholder="Foto" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="berita" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
            <!-- <center>
                                <h5><a href="login_controller/" style="color:#702edb">Kembali ke login</a></h5>
                            </center> -->
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

        <tr>
            <td>1</td>
            <td>Kegiatan Kami</td>
            <td>file1.jpg</td>
            <td>Berita</td>
            <td width="20px">
                <div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>
            </td>
            <td width="20px">
                <div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>
            </td>
            <td width="20px">
                <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
            </td>
        </tr>
    </table>
</div>
</div>
<!-- End of Main Content -->
@endsection