@extends('app')

@section('content')
<div class="the-box full-width full">
    <div class="row">
        <div class="col-sm-8 col-md-9 col-full-width-right">
            <div class="blog-detail-title">
                <div class="the-box no-border no-margin">
                    <h1>{{ $article->title }}</h1>
                </div>
            </div>
            <div class="the-box no-border no-margin blog-detail-content">
                <p><span class="label label-danger square">{{ date('M d, Y @h:i:s A', strtotime($article->published_at)) }}</span></p>
                <div>
                    {{ $article->content }}
                </div>
                @include('comment_box')
            </div>
        </div>
        <div class="col-sm-4 col-md-3 col-full-width-left">
            @include('most_commented_article')
            @include('recent_articles')
        </div>
    </div>
</div>
@stop
