@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group mb-2">
                <a href="{{url('kategori-items')}}" class="btn btn-secondary">Kembali ke Daftar Item</a>
            </div>
            <div class="card">

                @if($method == 'new')
                <div class="card-header">Buat Kategori Item Baru</div>
                @else
                <div class="card-header">Edit Kategori Item</div>
                @endif

                <div class="card-body">
                    @include('kategori_items.form.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection