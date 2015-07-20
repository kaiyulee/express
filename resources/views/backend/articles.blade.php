@extends('backend/layout')

@section('content')
<ol class="breadcrumb default square rsaquo sm">
    <li><a href="/"><i class="fa fa-home"></i></a></li>
    <li class="active">Article list</li>
</ol>
<div class="the-box no-border">
    <ul class="list-group">
    @foreach ($articles as $article)
        <li class="list-group-item" article-id="{{ $article->id }}">
            <span data-toggle="modal" href="#article-assist-modal" class="article-preview"><i class="fa fa-info-circle"></i> {{ $article->title }} </span>
            <span class="list-item-extra-right">
                <a type="button" class="btn btn-primary btn-perspective btn-xs" href="/backend/article/edit/{{ $article->id }}"><i class="fa fa-edit"></i> </a>
                <button type="button" class="btn btn-danger btn-perspective btn-xs article-del-warn"><i class="fa fa-trash-o"></i> </button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </span>
        </li>
    @endforeach
    </ul>

    <ul class="pager success">
        {!! $articles->render() !!}
        {{--<li class="previous"><a href="#fakelink">&larr; </a></li>--}}
        {{--<li class="next disabled"><a href="#fakelink"> &rarr;</a></li>--}}
    </ul>
</div>

<div class="modal fade" id="article-assist-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@stop
