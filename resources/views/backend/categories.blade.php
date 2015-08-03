@extends('backend.layout')

@section('content')
    <ol class="breadcrumb default square rsaquo sm">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li class="active">All categories</li>
    </ol>
    <div class="the-box no-border">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Parent</th>
                    <th>LinkTo</th>
                    <th>Status</th>
                    <th>Show?</th>
                    <th>Menu?</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Activated At</th>
                    <th>Deleted At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $cat)
                    <tr>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->alias }}</td>
                        <td>{{ $cat->parent_id }}</td>
                        <td>{{ $cat->link }}</td>
                        <td>{{ $cat->status }}</td>
                        <td>{{ $cat->show }}</td>
                        <td>{{ $cat->is_menu }}</td>
                        <td>{{ $cat->created_at }}</td>
                        <td>{{ $cat->updated_at }}</td>
                        <td>{{ $cat->activated_at }}</td>
                        <td>{{ $cat->deleted_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop