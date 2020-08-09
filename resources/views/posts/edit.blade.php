@extends('adminlte.master') 

@section('content3')
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Table Pertanyaan {{$post->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form Srole="form" action="/pertanyaan/{{$post->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="Judul">Judul</label>
                    <input type="text" class="form-control" id="judul" value="{{ old('judul',$post->judul)}}" name ="judul"placeholder="Enter title" required>
                    @error('judul')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <input type="text" class="form-control" rows="3" id="isi" name="isi" value="{{ old('isi',$post->isi)}}" placeholder="Enter ..." required>
                    @error('isi')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    
                  </div>
                  <div class="form-group">
                  <label>Date:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" id="created_at" name="created_at"data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label>Time :</label>

                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" id="updated_at" name="updated_at"data-target="#timepicker">
                      <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      </div>
                    <!-- /.input group -->
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" href="/pertanyaan">Edit Create</button>
                </div>
              </form>
            </div>
@endsection