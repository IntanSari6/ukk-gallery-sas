@extends('initial-view.main')
  
@section('container')

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Detail Album</span>
        </p>
        <h1 class="mb-4">Our Scoop And Skoops Gallery</h1>
      </div>

    <div class="row pb-3">
      <div class="col-12">
          <div class=" mb-4">
              <div class=" p-4">
                  <h4>Judul Album : Minuman</h4>
                  {{-- <h4>Judul Album : {{$photos[0]->album_name}}</h4> --}}
              </div>
          </div>
      </div>
  </div>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top mb-2" src="{{ asset('assets/img/event.jpg') }}" alt="" style="width: 400px;" />
                <div class="card-body">
                    <h5 class="card-title">Judul Foto : Kita</h5>
                    {{-- <h5 class="card-title">Judul Foto : {{$photo->photo_title}}</h5> --}}
                </div>
            </div>
        </div>
    </div>


</div>

@endsection