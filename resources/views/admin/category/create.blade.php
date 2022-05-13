@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2>Add Category</h2>
        <a href="{{ route('category.index') }}" class="btn btn-info">All Category</a>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="mb-3">
          <label for="categoryName" class="form-label">Category Name</label>
          <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" id="categoryName" placeholder="Bangla">

          @error('category_name')
            <div class="text-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
    
@endsection