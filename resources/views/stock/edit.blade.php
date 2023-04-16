@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h1>Edit Stok</h1>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-primary" href="{{ route('stock.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Perhatian!!!</strong> Data yang Dimasukkan Kurang Tepat.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stock.update',$stock->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock Name*:</strong>
                <input type="text" name="stock_name" value="{{ $stock->stock_name }}" class="form-control"  >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ticket*:</strong>
                <input type="text" name="ticket" value="{{ $stock->ticket }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Value*:</strong>
                <input type="text" name="value" value="{{ $stock->value }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>

    </form>
@endsection