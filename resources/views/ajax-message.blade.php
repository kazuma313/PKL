<div class="close-modal" data-dismiss="modal"><img src="{{ asset('styles/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="modal-body">

                <h2 class="text-uppercase">{{$berita->judul}}</h2>
                <hr>
                <img class="img-fluid d-block mx-auto" src="{{ asset('storage/'.$berita->foto) }}" alt="" />
                <p>{{$berita->berita}}</p>
                <ul class="list-inline">
                    <li>Tanggal: {{date('F d, Y', strtotime($berita->updated_at))}} </li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times mr-1"></i>
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>