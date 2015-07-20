@extends('app')

@section('content')
<div class="row">
@foreach($articles as $article)
    <div class="col-sm-4">
        <div class="featured-post-wide">
            <p></p>
            <div class="featured-text relative">
                <h3><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h3>
                <p>
                {{ str_limit($article->content, 80, '...') }} 
                </p>
                <p class="additional-post-wrap">
                    <span class="additional-post"><i class="fa fa-user"></i>by <a href="javascript:;">{{ $article->author }}</a></span>
                    <span class="additional-post"><i class="fa fa-clock-o"></i><a href="javascript:;">{{ date('M d, Y', strtotime($article->published_at)) }}</a></span>
                </p>
                <hr>
                <p class="text-right"><a href="/article/{{ $article->id }}" class="btn btn-success">Read more</a></p>
            </div><!-- /.featured-text -->
        </div>
    </div>
    <!-- ./col-sm-4 -->
@endforeach
</div>

<ul class="pagination success">
    <li class="disabled"><a href="javascript:;"><<</a></li>
    <li class="disabled"><a href="javascript:;"><</a></li>
    <li class="active"><a href="javascript:;">1</a></li>
    <li class=""><a href="javascript:;">2</a></li>
</ul>
@stop
