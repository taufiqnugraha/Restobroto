@extends('layouts.masterpelayan');

@section('content')
<button type="submit" class="btn btn-primary">
    Simpan Pesanan
</button>
<br>
<br>
<!--Makanan Pembuka-->
<div class="row">
<div class="col-md-12">
<div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-1"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg>
Makanan Pembuka </div>
    </span>    
    <div class="panel-body children" id="sub-item-1">
        <ul class="todo-list">
        @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 1)    
            <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                    <label for="checkbox">Diskon {{ $menu->diskon }}%</label>
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span class="badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                        <input type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                        <span class="badge panel-teal">0</span>
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
        <br>
    </div>

<!--Makanan Utama-->
    <div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-3"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg>
Makanan Utama</div>
    </span>    
    <div class="panel-body children " id="sub-item-3">
         <ul class="todo-list">
         @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 2)    
           <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                    <label for="checkbox">Diskon {{ $menu->diskon }}%</label>
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input class="badge{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span  class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                            <span class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">0</span>  
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
       <br>
    </div>

    <!--Makanan Penutup-->
    <div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-4"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg>
Makanan Penutup</div>
    </span>    
    <div class="panel-body children " id="sub-item-4">
         <ul class="todo-list">
            @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 3)    
            <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                    <label for="checkbox">Diskon {{ $menu->diskon }}%</label>
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span class="badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                        <input type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                        <span class="badge panel-teal">0</span>
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
       <br>
    </div>

    <!--Minuman Hangat-->
    <div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-5"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked round coffee mug"><use xlink:href="#stroked-round-coffee-mug"/></svg>
Minuman Hangat</div>
    </span>    
    <div class="panel-body children " id="sub-item-5">
        <ul class="todo-list">
            @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 4)    
           <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                    <label for="checkbox">Diskon {{ $menu->diskon }}%</label>
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span class="badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                        <input type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                        <span class="badge panel-teal">0</span>
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
       <br>
    </div>

    <!--Minuman Dingin-->
    <div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-6"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked paper coffee cup"><use xlink:href="#stroked-paper-coffee-cup"/></svg>
Minuman Dingin</div>
    </span>    
    <div class="panel-body children " id="sub-item-6">
         <ul class="todo-list">
            @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 5)    
            <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                    <label for="checkbox">Diskon {{ $menu->diskon }}%</label>
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span class="badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                        <input type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                        <span class="badge panel-teal">0</span>
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
       <br>
    </div>


</div><!--/col-->
</div><!--/row-->

<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<script>
        $(".add-or-substract").click(function(){            
            var id_pesanan = $(this).data('idpesanan');
            var nomor_meja = $(this).data('nomormeja');
            var jumlah = $(this).data('jumlah');
            var kode_makanan_minuman = $(this).data('kodemenu');
            var jumlah_pesanan = $('#jumlah' + kode_makanan_minuman).val();

            console.log('dsl :'+ id_pesanan + nomor_meja + jumlah + kode_makanan_minuman + jumlah_pesanan);

            if(jumlah_pesanan == 0){
                 $.ajax({ 
                    type:'post',
                    url:'{{ url("/pesanan/storepesanan") }}',							
                    data:{_token:'{{ csrf_token() }}', 
                            id_pesanan:id_pesanan,
                            nomor_meja:nomor_meja,
                            jumlah:jumlah,
                            kode_makanan_minuman:kode_makanan_minuman},
                    success:function(data){
                        $('.valjumlah' + data.kode_makanan_minuman).replaceWith('<input class="valjumlah'+ data.kode_makanan_minuman +'" type="hidden" id="jumlah'+ data.kode_makanan_minuman +'" value="'+ data.jumlah +'"></input>'),
                        $('.badge' + data.kode_makanan_minuman).replaceWith('<span class="badge'+ data.kode_makanan_minuman +' badge panel-teal">'+ data.jumlah +'</span>')
                    },
                });
            }else{
                $.ajax({ 
                    type:'post',
                    url:'{{ url("/pesanan/editpesanan") }}',							
                    data:{_token:'{{ csrf_token() }}', 
                            id_pesanan:id_pesanan,
                            nomor_meja:nomor_meja,
                            jumlah:jumlah,
                            kode_makanan_minuman:kode_makanan_minuman},
                    success:function(){
                        window.location.href = link; 
                    },
                });
            }
        });
</script>


@endsection