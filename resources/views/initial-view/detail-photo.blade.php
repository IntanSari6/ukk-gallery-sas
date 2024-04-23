@extends('initial-view.main')

@section('container')

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="d-flex flex-column text-left mb-3">
        <p class="section-title pr-5">
          <span class="pr-2">Blog Detail Page</span>
        </p>
        <h1 class="mb-3">Judul Foto</h1>
        <div class="d-flex">
          <p class="mr-3"><i class="fa fa-user text-primary"></i> Nama User</p>
          <p class="mr-3">
            <i class="fa fa-folder text-primary"></i> Nama Album
          </p>
          <p class="mr-3"><i class="fa fa-comments text-primary"></i> 15</p>

          <small class="mr-3 like-icon"><a href="/initial-view/detail-photo/like"><i class="fa fa-heart text-primary"></i></a></small>
        </div>
      </div>
      <div class="mb-5">
          <img class="card-img-top mb-2" src="{{ asset('assets/img/event.jpg') }}" alt="" style="width: 400px;" />
        <p>
         Deskripsi
        </p>
      </div>

  <div class="row">
      <div class="col-md-6">
          <div class="card" style="margin-top: 20px;">
              <div class="card-header">
                 Komentar
              </div>
              <div class="card-body">
                  {{-- @foreach ($comments as $comment) --}}
                  <div class="card mb-3">
                      <div class="card-body">
                          <h5 class="card-title">Nama: <b>User</b></h5>
                          <h6 class="card-subtitle mb-2 text-muted">Komentar: <b>Komentar</b></h6>
                          {{-- <p class="card-text">Komentar: <b>{{ $comment-> }}</b></p> --}}
                      </div>
                  </div>
                  {{-- @endforeach --}}
              </div>
            </div>
        </div>
    </div>
    

    <div class="row">
        <div class="card-body p-4">
            <form id="commentForm" method="post" action="/foto/" class="mb-5" data-parsley-validate>
                @csrf
                <div class="text-center ml-5 mr-5">
                <h5><b><p style="font-family:Perpetua; color:RGB(160, 97, 36); margin-top:100px;">
                    Tulis Tanggapanmu !
                </p></b></h5>
                </div>
                <small style="line-height:5px"></small>
                <div class="form-floating mb-3">
                    <label for="floatingTextarea2">Komentar</label>
                    <textarea class="form-control @error('cmn_comment') is-invalid @enderror" id="cmn_comment" name="cmn_comment" style="height: 100px" required data-parsley-inputs data-parsley-trigger="keyup">{{ old('cmn_comment') }}</textarea>
                    @error('cmn_comment')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <label for="floatingInput">Nama</label>
                    <input type="name" class="form-control @error ('cmn_name') is-invalid @enderror" id="cmn_name" name="cmn_name" value="{{ old('cmn_name') }}" required data-parsley-inputs data-parsley-trigger="keyup">
                    
                    @error('cmn_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <label for="floatingInput">Email</label>
                    <input type="text" class="form-control @error ('cmn_email') is-invalid @enderror" id="cmn_email" name="cmn_email" value="{{ old('cmn_email') }}" required data-parsley-inputs data-parsley-type="email" data-parsley-trigger="keyup">
                    
                    @error('cmn_email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <button type="submit" class="btn btn-primary custom-button">Kirim</button>
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection
