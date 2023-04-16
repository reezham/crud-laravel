@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h1>Create New Stok</h1>
        </div>
    </div>
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <a class="btn btn-primary" href="{{ route('stock.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Perhatian!!!</strong> Data yang Diinput Kurang Tepat.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('stock.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock Name*:</strong>
                <input type="text" name="stock_name" class="form-control" placeholder="Stock Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock Ticket*:</strong>
                <input type="text" name="ticket" class="form-control" placeholder="Stock Ticket">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock Value*:</strong>
                <input type="text" name="value" class="form-control" placeholder="Stock Value">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>
@endsection