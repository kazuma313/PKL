@extends('Layout.LayHome')


{{-- @section('gambar_home')


@endsection --}}



@section('content')
<section class="page-section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Berita terkini</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>


        <div class="row">
            @foreach( $berita as $brt)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'.$brt->foto) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $brt->judul }}</h5>
                        <span class="card-text">{{ $brt->berita }}</span>
                        <hr>
                        <!-- <button type="button" class="btn btn-success" data-toggle="modal" href="#berita">lihat selengkapnya</button> -->
                        <!-- <a href="/berita/{{ $brt->id }}" class="btn btn-info lihat" >detail</a> -->
                        <a data-toggle="modal" id="getMessage" class="btn btn-info lihat" data-target="#messageBoard" data-url="{{ url('berita',['id'=>$brt->id])}}" href="#."> detail </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>


<div class="portfolio-modal modal fade" id="messageBoard" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content message-modal">
            
        </div>
    </div>
</div>


<!-- 
<div class="modal fade" id="messageBoard" role="dialog">
    <div class="modal-dialog">
        
        <div class="modal-content message-modal">

        </div>
    </div>
</div> -->

<script>
    $(document).on('click', '#getMessage', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        $('.message-modal').html('');
        $('#modal-loader').show();
        $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html'
            })
            .done(function(data) {
                // console.log(data);  
                $('.message-modal').html('');
                $('.message-modal').html(data); // load response 
                $('#modal-loader').hide(); // hide ajax loader   
            })
            .fail(function() {
                $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                $('#modal-loader').hide();
            });
    });
</script>




<!-- <script>
$('.lihat').on('click',function(){
    $('.modal-body').load('getContent.php?id={berita}',function(){
        $('#Berita').modal({show:true});
    });
});
</script> -->


@endsection



@section('content2')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('styles/assets/img/logos/envato.jpg')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('styles/assets/img/logos/designmodo.jpg')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('styles/assets/img/logos/themeforest.jpg')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('styles/assets/img/logos/creative-market.jpg')}}" alt="" /></a>
            </div>
        </div>
    </div>
</div>
@endsection