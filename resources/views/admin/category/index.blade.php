@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2>All Category</h2>
        <a href="{{ route('category.create') }}" class="btn btn-info">Add Category</a>
    </div>
    <div class="card-body">
        <table class="table 100"> 
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($category as $key => $cat)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $cat->category_name }}</td>
                    <td>{{ $cat->category_slug }}</td>

                    <td>
                        <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-sm btn-primary d-inline-block">Edit</a>
                        <a href="{{ route('category.destroy', $cat->id) }}" class="btn btn-sm btn-danger d-inline-block">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection