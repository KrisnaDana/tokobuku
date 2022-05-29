@extends('layouts.adm_panel')

@section('title', 'Admin | Add Diskon Buku')

@section('body')
<link rel="stylesheet" type="text/css" href="/css/star.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<div class="card shadow mb-4">
            <form class="form" method="post" action="{{route('adm-diskon-save')}}" >
                @csrf
                <div class="card-header text-center">
                    <h3 class="card-title title-up">Add Diskon Buku</h3>
                </div>

                <div class="card-body">
                    <div class="input-group no-border mt-1 mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-fw fa-book"></i>
                                <span>Buku   </span>
                                </i>
                            </span>
                        </div>
                        <select class="form-control @error('book_id') is-invalid @enderror"  name="book_id" required>
                            @foreach ($buku as $data )
                                <option style="color:black"  value="{{ $data->id }}">{{ $data->book_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('book_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="input-group no-border mt-1 mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-fw fa-book"></i>
                                <span >Diskon</span>
                                </i>
                            </span>
                        </div>
                        <input type="number" class="form-control @error('percentage') is-invalid @enderror" placeholder="Percentage" name="percentage" id="percentage" required >
                    </div>
                    @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="input-group no-border mt-1 mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-fw fa-book"></i>
                                <span>Mulai</span>
                                </i>
                            </span>
                        </div>
                        <input type="datetime-local" placeholder="Start Discount" class="form-control @error('start') is-invalid @enderror" name="start" required/>
                    </div>
                    @error('start')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="input-group no-border mt-1 mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-fw fa-book"></i>
                                <span>Berakhir</span>
                                </i>
                            </span>
                        </div>
                        <input type="datetime-local" placeholder="End Discount" class="form-control @error('end') is-invalid @enderror" name="end" required/>
                    </div>
                    @error('end')
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