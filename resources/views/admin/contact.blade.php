@extends('admin.Layout.sidebar')


@section('form')

<hr class="sidebar-divider d-none d-md-block">

<div class="table-contact">
    <table class="table table-bordered table-hover table-striped">
        <tr>
        <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Pesan</th>
        </tr>

        @foreach($tanggapan as $tgp)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tgp->nama }}</td>
            <td>{{ $tgp->email }}</td>
            <td>{{ $tgp->nomor_hp }}</td>
            <td>{{ $tgp->comentar }}</td>
            
        </tr>
        @endforeach
    </table>
</div>
</div>
<!-- End of Main Content -->
@endsection