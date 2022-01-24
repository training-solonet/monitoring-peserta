@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
           <h1 class="mb-3"> {{ $category->name }} </h1>

           <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
           
           <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
           
           <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('apakah anda akan hapus data ini ?')"> <span data-feather="x-circle"></span> Delete</button>
            </form>
               </div>
    </div>
</div>
   
@endsection