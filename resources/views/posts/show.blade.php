@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>{{ $post->description }}</p>
                            <hr>
                        <span class="badge badge-info text-white">{{ $post->created_at }}</span> | Author: <a href="#">{{ $post->author->name }}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
