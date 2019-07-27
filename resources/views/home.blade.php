@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($posts as $post)
                        <a href="{{ route('post.show', ['post' => $post->id]) }}"><h4>{{ $post->title }} <span class="badge badge-success">{{ $post->author->name }}</span></h4></a>
                            <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
