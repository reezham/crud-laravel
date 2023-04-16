@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>UAS Framework</h2><br>
                <h1>Stocks</h1>
            </div>
            
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-primary" href="{{ route('stock.create') }}"> Input Stock</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-success table-striped">
        <tr>
            <th width="20px" class="text-center">ID</th>
            <th width="280px"class="text-center">Nama Stok</th>
            <th width="280px"class="text-center">Tiket Stok</th>
            <th width="280px"class="text-center">Nilai Stok</th>
            <th width="280px"class="text-center">Updated at</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($stock as $stocks)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td class="text-center">{{ $stocks->stock_name }}</td>
            <td class="text-center">{{ $stocks->ticket }}</td>
            <td class="text-center">{{ $stocks->value }}</td>
            <td class="text-center">{{ $stocks->updated_at }}</td>
            <td class="text-center">
                <form action="{{ route('stock.destroy',$stocks->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('stock.show',$stocks->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('stock.edit',$stocks->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Data ini tidak akan tersedia lagi, Anda Yakin?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $stock->links() !!}

@endsection