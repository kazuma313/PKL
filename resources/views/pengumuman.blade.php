@extends('Layout.LayHome')
@section('content')
<section>
    <div class="container">
        @foreach( $pengumuman as $pgm )
        <div class="row">

            <div class="col-sm">
                <div class="p-3 mb-2 bg-secondary text-white">
                    <div class="jumbotron">
                        <div class="p-3 mb-2 bg-light text-dark">
                            <h1 class="display-4">{{ $pgm->judul }}</h1>
                            <p class="lead">{{ $pgm->sub_judul }}</p>
                            <hr class="my-4">
                            <p>{{ $pgm->created_at }}</p>
                            <p class="lead">
                                <a class="btn btn-primary btn-sm" href="#" role="button">Baca selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</section>
@endsection