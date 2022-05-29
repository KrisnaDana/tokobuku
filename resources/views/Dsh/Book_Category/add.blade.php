@extends('layouts.adm_panel')

@section('title', 'Admin | Add Kategori Buku')

@section('body')
<link rel="stylesheet" type="text/css" href="/css/star.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<div class="card shadow mb-4">
    <form class="form" method="post" action="{{route('adm-book-category-save')}}">
        @csrf
        <div class="card-header text-center">
            <h5 class="card-title title-up">Tambah Kategori Buku</h5>
        </div>

        <div class="card-body">
            <div class="input-group no-border">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-fw fa-book"></i>

                        </i>
                    </span>
                </div>
                <input type="text" class="form-control @error('category_id') is-invalid @enderror" placeholder="Kategory Name" name="category_name" required>
            </div>
            @error('category_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="col-lg-12 mt-4 mb-2" style="justify-content:center">
                <button type="submit" class="btn btn-primary ">Submit</button>
                <a href="{{route('adm-buku')}}" class="btn btn-danger">back</a>
            </div>

    </form>
</div>
@endsection