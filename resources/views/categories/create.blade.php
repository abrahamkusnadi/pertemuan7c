@extends('layout.master')

@section('title', 'Create New Category')

@section('content')
<h2 class="text-center">Add New Category</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Category Name</label>
        <input type="text" name="name" id="" class="form-control">
    </div>

    <button class="btn btn-primary">Save</button>
</form>

@endsection