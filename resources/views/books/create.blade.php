@extends('layout.master')

@section('title', 'Create New Book')

@section('content')
<h2 class="text-center">Add New Book</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input type="number" name="price" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Categories</label>
        @foreach ($categories as $c)
            <input type="checkbox"
            name="categories[]"
            value="{{ $c->id }}">
            {{ $c->name }} <br>     
        @endforeach
    </div>

    <button class="btn btn-primary">Save</button>
</form>
@endsection