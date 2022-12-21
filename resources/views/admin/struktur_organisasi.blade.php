@extends('admin.Layout.sidebar')

@section('form')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">`
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>

    <!-- form input data-->
    <div class="form-berita">
        <form action=<?= "registration/send_admin_data" ?> method="post">
            <h2 class="text-center">Input Struktur Organisasi</h2>
            <div class="form-grou p">
                <input type="file" id="myFile" name="filename" required>
            </div>

            <hr class="sidebar-divider d-none d-md-block">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
            </div>
            <!-- <center>
                                <h5><a href="login_controller/" style="color:#702edb">Kembali ke login</a></h5>
                            </center> -->
        </form>
    </div>

</div>
<hr class="sidebar-divider d-none d-md-block">
</div>
<!-- End of Main Content -->
@endsection