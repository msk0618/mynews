@extends('layouts.front')
@section('title', 'プロフィール一覧')


@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    <p>{{ Str::limit($post->name, 150) }}</p>
                                </div>
                                <div class="title">
                                    {{ Str::limit($post->gender, 150) }}
                                </div>
                                <div class="title">
                                    {{ Str::limit($post->hobby, 150) }}
                                </div>
                                <div class="title">
                                    {{ Str::limit($post->introduction, 150) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection