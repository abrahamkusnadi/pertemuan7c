@extends('layout.master')

@section('title', 'Category List')

@section('content')
<h2 class="text-center">Category List</h2>

<a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add New Category</a>

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Action</th>
    </tr>

    @foreach ($categories as $c)
    <tr>
        <td>{{ $c->name }}</td>
        <td>
            <form action="{{ route('categories.delete', $c->id) }}"
            method="POST"
            onsubmit="return confirm('Are you sure you want to delete this?')">
            @csrf
            <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection