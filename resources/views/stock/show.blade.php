@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Stock</h2>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-primary" href="{{ route('stock.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock Name:</strong>
                <p>Barang ini bernama {{ $stock->stock_name }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock Ticket:</strong>
                <p>Barang memiliki kode ticket dengan nama {{ $stock->ticket }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock Value:</strong>
                <p>Nilai atau jumlah dari barang ini adalah {{ $stock->value }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Created at:</strong>
                <p>Barang ini berhasil diinput pada {{ $stock->created_at }} dengan sukses</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Updated at:</strong>
                <p>Barang ini berhasil diupdate pada {{ $stock->updated_at }} dengan sukses</p>
            </div>
        </div>
    </div>
@endsection