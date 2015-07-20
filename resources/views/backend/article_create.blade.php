@extends('backend.layout')

@section('content')
<ol class="breadcrumb default square rsaquo sm">
    <li><a href="/"><i class="fa fa-home"></i></a></li>
    <li class="active">Add new post</li>
</ol>
<div class="the-box no-border">
{!! Form::open(array('url' => url('/backend/article/create'), 'method' => 'post', 'id' => 'article-create', 'files'=>true)) !!}
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::text('title', null, ['class'=>'form-control input-lg', 'placeholder'=> 'Post title here...']) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('content', null, ['class'=>'summernote-lg']) !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Post category</label>
                {!!
                    Form::select(
                        'category',
                        $categories,
                        '',
                        [
                            'class'=>'form-control chosen-select',
                            'data-placeholder'=>'Choose category...'
                        ]
                    )
                !!}
            </div>
            <div class="form-group">
                <label>Post date</label>
                {!! Form::text('published_at', null, ['class'=>'form-control datepicker',
                'data-date-format'=>'mm-dd-yy', 'placeholder'=>'MM-DD-YY']) !!}
            </div>
            <div class="form-group">
                <label>Post author</label>
                {!!
                    Form::select(
                        'author',
                        [
                            'a' => 'aaa',
                            'b' => 'bbb',
                            'c' => 'ccc'
                        ],
                        'c',
                        [
                            'class'=>'form-control chosen-select',
                            'data-placeholder'=>'Choose author...'
                        ]
                    )
                !!}
            </div>
            <div class="form-group">
                <label>Source</label>
                <input class="form-control source" type="text" name="source" placeholder="http://">
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
                <button type="submit" class="btn btn-success save-and-post">Save and post</button>
                <button type="button" class="btn btn-danger discard">Discard</button>
            </div>
        </div>
    </div>
    {!! csrf_field() !!}
{!! Form::close() !!}
</div>
@stop
