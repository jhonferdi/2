@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-1">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Category Name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info text-decoration-none">Info</a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning text-decoration-none">Edit</a>
                    <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="POST">
                      @csrf
                      @method('delete')
                      <button class="badge bg-danger text-decoration-none " onclick="return confirm('Apakah Anda Yakin Menghapus Category Ini?')" type="submit">Delete</button>
                    </form>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection