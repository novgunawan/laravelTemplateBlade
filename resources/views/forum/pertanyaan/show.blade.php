@extends('adminLTE.master')
@section('content')
<div class="card bg-light mt-3 ml-3">
    <div class="card-header text-muted border-bottom-0">
      Pertanyaan 
    </div>
    <div class="card-body pt-0">
      <div class="row">
        <div class="col-7">
        <h2 id = "judul"><strong>{{$pertanyaan->judul}}</strong></h2>
        <p class="text-muted text-sm" id="isi">{{$pertanyaan->isi}}</p>
        </div>
        
      </div>
    </div>
  </div>

@endsection