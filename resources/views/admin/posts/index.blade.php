@extends('layouts.admin')

@section('content')

 <table class="table table-hover">
     <thead>
       <tr>
         <th>Id</th>
         <th>User</th>
         <th>Title</th>
         <th>Category</th>
         <th>Photo</th>
         <th>body</th>
         <th>Created</th>
         <th>Updated</th>
       </tr>
     </thead>
     <tbody>
     @if($posts)
       @foreach($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->user->name}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
          <td><img src="{{$post->photo ? URL::asset('/images/'.$post->photo->file) : 'http://via.placeholder.com/50x50'}}" style="max-height:50px" /></td>
          <td>{{$post->body}}</td>
          <td>{{$post->created_at->diffForHumans()}}</td>
          <td>{{$post->updated_at->diffForHumans()}}</td>
        </tr>
       @endforeach
     @endif
     </tbody>
 </table>
@stop