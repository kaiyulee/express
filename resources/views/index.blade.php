@extends('app')

@section('content')
<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
    <li><a href="/"><i class="fa fa-home"></i></a></li>
</ol>
<!-- End breadcrumb -->
<div class="row">
    <div class="col-md-8">
        <!-- BEGIN FEATURED POST -->
        <div class="featured-post-wide">
            <img src="{{ asset('/img/photo/wide/image-wide.jpg') }}" class="img-responsive" alt="Image">
            @foreach($articles as $article)
            <div class="featured-text relative-left">
                <i class="fa fa-picture-o icon-danger icon-square icon-xs icon-type"></i>
                <h3><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h3>
                <p>
                {{ str_limit($article->content, 100, '...') }}
                </p>
                <p class="additional-post-wrap">
                    <span class="additional-post"><i class="fa fa-user"></i>by <a href="#fakelink">{{ $article->author }}</a></span>
                    <span class="additional-post"><i class="fa fa-clock-o"></i><a href="#fakelink">{{ date('M d',strtotime($article->published_at)) }}</a></span>
                    <span class="additional-post"><i class="fa fa-comment"></i><a href="#fakelink">3 comments</a></span>
                </p>
                <hr />
                <p class="text-right"><a href="/article/{{ $article->id }}" class="btn btn-success">Read more</a></p>
            </div><!-- /.featured-text -->
            @endforeach
        </div><!-- /.featured-post-wide -->
        <ul class="pager success">
            {!! $articles->render() !!}
            {{--<li class="previous"><a href="#fakelink">&larr; </a></li>--}}
            {{--<li class="next disabled"><a href="#fakelink"> &rarr;</a></li>--}}
        </ul>
    </div><!-- ./col-md-8 -->
    <div class="col-md-4">
        <!-- BEGIN POPULAR POST -->
        @include('most_liked_article')
        <!-- END POPULAR POST -->
        <!-- BEGIN JOIN NEWSLETTER -->
        <div class="the-box no-border text-center signup-newsletter">
            <h4 class="small-heading more-margin-bottom">JOIN NEWSLETTER</h4>
            <p>Sign up for our daily Newslatter</p>
            <form role="form">
                <div class="row">
                    <div class="col-xs-8">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email">
                      </div>
                    </div><!-- /.col-xs-8 -->
                    <div class="col-xs-4 col-full-width-left">
                        <button type="submit" class="btn btn-info btn-block">Sign up</button>
                    </div><!-- /.col-xs-4 -->
                </div><!-- /.row -->
            </form>
        </div><!-- /.the-box .no-border -->
        <!-- END JOIN NEWSLETTER -->
        <!-- BEGIN TAG CLOUD -->
        @include('tags_cloud')
        <!-- END TAG CLOUD -->
        <!-- BEGIN RECENT POST -->
        @include('recent_article_box')
        <!-- END RECENT POST -->
        <!-- BEGIN RECENT COMMENTS -->
        @include('recent_comments')
        <!-- END RECENT COMMENTS -->
    </div><!-- /.col-md-4 -->
</div><!-- ./row -->
@stop
