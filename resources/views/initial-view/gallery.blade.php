@extends('initial-view.main')

@section('container')  

<div class="container-fluid pt-5 pb-3">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Our Gallery</span>
        </p>
        <h1 class="mb-4">Our Kids School Gallery</h1>
      </div>
      <div class="row">
        <div class="col-12 text-center mb-2">
          <ul class="list-inline mb-4" id="portfolio-flters">
 
            <a href="/initial-view/detailalbum"><li class="btn btn-primary btn-oval m-1 album">
                <h4>Minuman</h4>
            </li></a>
                
          </ul>
        </div>
      </div>
     
    </div>
  </div>
@endsection