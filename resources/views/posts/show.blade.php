@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary"><i class="fa fa-backward"></i> Go Back</a>
    <div class="card mt-3">
        <div class="card-body">
            <h1>{{$post->title}}</h1>
            <p><small>{{$post->created_at}}</small></p>
            <div>{{$post->body}}</div>
        </div>
    </div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary mt-3"><i class="fa fa-pencil"></i> Edit Post</a>
    <form action="{{route('posts.destroy', $post->id)}}" method="POST" class="pull-right">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger mt-3"><i class="fa fa-remove"></i> Delete Post</button>
        {{csrf_field()}}
    </form>
@endsection