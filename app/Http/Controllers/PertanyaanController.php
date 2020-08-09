<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PertanyaanController extends Controller
{
    public function create(){
    	return view('posts.create');
    }
    public function store(Request $request){
    	//dd($request->all());
    	$request->validate([
    		'judul'=>'required|unique:pots',
    		'isi'=> 'required'
    		
    	]);
    
    $query = DB::table('pots')->insert([
    		"judul"=> $request["judul"],
    		"isi"=>$request["isi"],
    		
    	]);

    	return redirect('/pertanyaan')->with('success','Post Berhasil Disimpan');
    }
 public function index(){
 		$posts = DB::table('pots')->get();

    	return view('posts.index',compact('posts'));
    }   
    public function show($id){
    	$post =DB::table('pots')->where('id',$id)->first();
    	//dd($post);
    	return view('posts.show',compact('post'));
    }
    public function edit($id){
        $post =DB::table('pots')->where('id',$id)->first();
        return view('posts.edit',compact('post')); 
    }
    public function update($id, Request $request){
        $request->validate([
            'judul'=>'required|unique:pots',
            'isi'=> 'required'
            
        ]);
    
        $query =DB::table('pots')
        ->where('id',$id)
        ->update([
                'judul'=> $request['judul'],
                'isi'=>$request['isi'],
        ]);
        return redirect('/pertanyaan')->with('success','Berhasil update di post');
    }
    public function destroy($id){
        $query =DB::table('pots')->where('id',$id)->delete();
        return redirect('/pertanyaan')->with('success','Berhasil di Delete');
    }
}
