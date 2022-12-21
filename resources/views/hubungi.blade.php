@extends('layout.LayHome')
@section('content')
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <form action="hubungi" method="post">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control @error('nama') is-invalid @enderror" name="nama" type="text" placeholder="Nama" value="{{ old('nama')}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" placeholder="Email" value="{{ old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror

                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" type="tel" placeholder="Nomor HandPhone" value="{{ old('nomor_hp')}}">
                        @error('nomor_hp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control @error('comentar') is-invalid @enderror" name="comentar" placeholder="Pesan anda terhadap kami" cols="50">{{ old('comentar')}}</textarea>
                        @error('comentar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Send Message</button>
            </div>

        </form>
    </div>
</section>
@endsection