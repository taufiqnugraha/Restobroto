@extends('layouts.masterkasir');

@section('content')

<div class="col-md-12">
    <div class="panel panel-blue">
        <div class="panel-heading dark-overlay">Meja No {{ $once->nomor_meja }}</div>
        <div class="panel-body">
        <ul class="todo-list">
            @foreach($pesanan as $item)
                <li class="todo-list-item">
                    <div class="checkbox">
                        <label for="checkbox"><b>{{ $item->nama_makanan_minuman }}</b></label>
                        <label for="checkbox"><b>{{ $item->jumlah }} Porsi</b></label>
                    </div>
                    <div class="pull-right action-buttons">
                        <label for="checkbox"> Rp. {{ $item->harga_makanan_minuman * $item->jumlah }}</label>
                    </div>
                </li>
            @endforeach
            <hr>
            <li class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>Total</b></label>
                </div>
                <div class="pull-right action-buttons">
                    <label for="checkbox"> Rp. {{ $total }}</label>
                </div>
            </li>
            <hr>
            <li class="todo-list-item">
                <div class="checkbox">
                <form enctype="multipart/form-data" role="form" method="POST" action="{{ url('/bayar') }}">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <input id="bayar" type="text" placeholder="Masukan Jumlah Bayar" class="form-control" name="bayar" required autofocus>
                        <input type="hidden" name="id_pesanan" value="{{ $once->id_pesanan }}">
                        <input type="hidden" name="total" value="{{ $once->id_pesanan }}">
                        <button type="submit" class="btn btn-warning">
                            Bayar
                        </button>
                    </div>
                </form>
                </div>
                <div class="pull-right action-buttons">
                
                </div>
            </li>
            <hr>
                <li class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>Kembalian</b></label>
                </div>
                <div class="pull-right action-buttons">
                    @if($jml_bayar != 0)
                        <label for="checkbox"> Rp. {{ $jml_bayar - $total }}</label>
                    @else
                        <label for="checkbox"> Rp. 0</label>
                    @endif
                </div>
            </li>
            <hr>
        </ul>
        </div>
    </div>


@endsection