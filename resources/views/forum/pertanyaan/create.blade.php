@extends('adminLTE.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Buat Pertanyaan</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/pertanyaan">
        @csrf

      <div class="card-body">

        <div class="form-group">
          <label for="judul">Judul Pertanyaan</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pertanyaan" required>
           
          @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
          @enderror

        </div>

        <div class="form-group">
          <label for="isiPertanyaan">Isi Pertanyaan</label>
          <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi Pertanyaan" required>
        
          @error('isi')
            <div class="alert alert-danger">{{ $message }}</div>
         @enderror

        </div>

      </div>
      
            <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>

    </form>
  </div>

@endsection