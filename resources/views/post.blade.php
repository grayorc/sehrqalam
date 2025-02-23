@extends('layouts.app') <!-- Use your own layout as needed -->

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $post->main_image) }}" alt="{{ $post->title }} Main Image">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
