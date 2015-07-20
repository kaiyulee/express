@extends('backend.layout')
@section('content')
<ol class="breadcrumb default square rsaquo sm">
    <li><a href="/"><i class="fa fa-home"></i></a></li>
    <li class="active">Article editing</li>
</ol>
<div class="the-box no-border">
{!! Form::open(array('url' => url('/backend/article/edit/' . $article->id), 'method' => 'post', 'id' => 'article-edit', 'files'=>true)) !!}
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::text('title', $article->title, ['class'=>'form-control input-lg', 'placeholder'=> 'Post title here...']) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('content', $article->content, ['class'=>'summernote-lg']) !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Post category</label>
                {!!
                    Form::select(
                        'category',
                        $categories,
                        $article->category,
                        [
                            'class'=>'form-control chosen-select',
                            'data-placeholder'=>'Choose category...'
                        ]
                    )
                !!}
            </div>
            <div class="form-group">
                <label>Post date</label>
                {!! Form::text('published_at', $article->published_at, ['class'=>'form-control datepicker',
                'data-date-format'=>'mm-dd-yy', 'placeholder'=>'MM-DD-YY']) !!}
            </div>
            <div class="form-group">
                <label>Post author</label>
                {!!
                    Form::select(
                        'author',
                        $users,
                        $article->author,
                        [
                            'class'=>'form-control chosen-select',
                            'data-placeholder'=>'Choose author...'
                        ]
                    )
                !!}
            </div>
            <div class="form-group">
                <label>Source</label>
                <input class="form-control source" type="text" name="source" value="{{ $article->source }}" placeholder="http://">
            </div>
            <div class="form-group">
                <label>Featured image</label>
                <div class="input-group">
                    <input type="text" class="form-control" readonly="">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" name="featured_img" id=""/>
                        </span>
                    </span>
                </div><!-- /.input-group -->
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success update-post">Update!</button>
                <button type="button" class="btn btn-danger discard">Discard</button>
            </div>
        </div>
    </div>
    {!! csrf_field() !!}
{!! Form::close() !!}
</div>
@stop