@extends('adminlte.master')

@section('content2')
<form Srole="form" action="/pertanyaan" method="GET">
	@csrf
<div class="mt-3 ml-3">
	<div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    	<th>ID</th>
                      <th>JUDUL</th>
                      <th>ISI PERTANYAAN</th>
                      <th>Date-Time</th>
                      <th>Update</th>

      				</tr>
                  </thead>
                  <tbody>
                  	
                  	<tr>
                  		<td>{{$post->id}}</td>
                  		<td>{{$post->judul}}</td>
                  		<td>{{$post->isi}}</td>
                  		<td>{{$post->created_at}}</td>
                  		<td>{{$post->updated_at}}</td>	
                  		</tr>
                  
                  	
                  </tbody>
                </table>
            </div>
             <button class="btn btn-primary mb-2">Back to Table</button>

</div>
</form>

@endsection