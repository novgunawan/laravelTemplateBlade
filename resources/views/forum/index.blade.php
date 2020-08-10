@extends('adminLTE.master')

@section('content')
    <div class="mt-4 ml-4">
      
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Pertanyaan</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              @if(session('success'))
                <div class="alert alert-success">
                  {{session('success')}}
                </div>

              @endif
              <a class="btn btn-primary mb-3" href="/pertanyaan/create">Create New Post</a>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th style="width: 10px;">No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($pertanyaan as $key => $q)
                        <tr>
                                {{-- print nomor --}}
                            <td>{{$key +1}}</td>
                                    {{-- print judul --}}
                            <td><strong>{{$q->judul}}</strong></td>
                            {{-- print isi --}}
                            <td>{{$q->isi}}</td>
                            <td style="display:flex;">

                              <a href="/pertanyaan/{{$q->id}}" class="btn btn-info btn-sm">Show</a>&emsp;
                              <a href="/pertanyaan/{{$q->id}}/edit" class="btn btn-info btn-sm" style="background-color: green;border-color:green;">Update</a>&emsp;
                            <form method="POST" action="/pertanyaan/{{$q->id}}">
                            @csrf

                            @method('DELETE')
                            <input type="submit" value="Delete"class="btn btn-info btn-sm" style="background-color: #101010; border-color:#101010;">
                          </form>
                          {{-- <button class="btn btn-danger" data-toggle="modal"data-target="#delete">Delete</button> --}}
                             
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="4" align="center">Tidak ada pertanyaan</td>
                        </tr>
                    @endforelse

                 
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    
@endsection