@extends('layout.master')

@section('title', 'Book List')

@section('content')
<h2 class="text-center">Book List</h2>

<a href="{{ route('books.create') }}" class="btn btn-success mb-3">Add New Book</a>

<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Categories</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    @foreach ($books as $b)
    <tr>
        <td>{{ $b->title }}</td>
        <td>
            @foreach ($b->categories as $c)
                {{ $c->name }} <br>
            @endforeach
        </td>
        <td>
            Rp {{ number_format($b->price, 0, '.', '.') }}
        </td>
        <td>
            <form action="{{ route('books.delete', $b->id) }}"
            method="POST"
            onsubmit="return confirm('Are you sure you want to delete this book?')">
            @csrf
            <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection