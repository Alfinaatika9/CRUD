@extends('adminlte.master') 

@section('content')
<style type="text/css">
	.card-header{
		background-color:blue; 
	}
	.card-title{
		color:white;

	}
</style>
 <div class="mt-3 ml-3">
 	<div class="card">
 		<form Srole="form" action="/pertanyaan/create" method="GET">
 			@csrf
              <div class="card-header">
                <h3 class="card-title">Tabel Pertanyaan</h3>

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
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    	<th>ID</th>
                      <th>JUDUL</th>
                      <th>ISI PERTANYAAN</th>
                      <th>Date-Time</th>
                      <th>Update</th>
                      <th>Action</th>
                 
                    </tr>
                  </thead>
                  <tbody>
                  	@forelse ($posts as $key=>$post)
                  	<tr>
                  		<td>{{$key+1}}</td>
                  		<td>{{$post->judul}}</td>
                  		<td>{{$post->isi}}</td>
                  		<td>{{$post->created_at}}</td>
                  		<td>{{$post->updated_at}}</td>
                  		<td style="display: flex;">
                  			<a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm">show</a>
                        <a href="/pertanyaan/{{$post->id}}/edit" class="btn  btn-warning btn-sm">edit</a>
                        <form action="/pertanyaan/{{$post->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="delete" class="btn btn-danger btn-sm">
                        </form>
                  		</td>

                  	</tr>
                    @empty
                    <td colspan="4" align="center">No Posts</td>
                  	@endforelse
                  </tbody>
                </table>

              </div>
              <!-- /.card-body -->
                   <div class="card-footer">
                         @if(session('success'))
                    <div class="alert alert-success">
                      {{session('success')}}
                      
                    </div>
                    @endif
                      
                  <button class="btn btn-primary mb-2" href="/pertanyaan/create">Add Table</button>
                </div>
            </div>
        </form>
 	
 </div>

@endsection