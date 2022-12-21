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
                            <h2 class="text-center">Halaman Daftar Akun Admin</h2>  
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="ttl" placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="form-group">
                                <select name="jenis_kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" required>
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
                <!-- End of Main Content -->
@endsection
