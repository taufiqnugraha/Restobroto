@extends('layouts.masterkoki');

@section('content')
<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
        <script>
			$(function(){
				realtimeMethodDaftarPesanan();
			});

			function realtimeMethodDaftarPesanan(){
                var id_user = $('#id-user').val();

				$.ajax({
					url:'{{ url("/daftarpesanan") }}',    
					data:{_token: '{{ csrf_token() }}',
                          id_user:id_user},
					success:function(data){
                            //console.log(pesanan[0].id_pesanan);
                                var pesanan = data.data1;
                                var pesanan1 = data.data2;
                            
                                console.log(pesanan1.notification);
                                //$('#item'+ pesanan.substring(1)).empty('');
                                
                                if(pesanan1.notification != 0){
                                     $('#item'+ pesanan[0].id_pesanan).empty('<div id="item'+ pesanan[0].id_pesanan +'" class="alert bg-primary" role="alert"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/><span data-toggle="collapse" href="#coba'+ pesanan[0].id_pesanan +' "></use></svg> <b> Meja No '+ pesanan[0].nomor_meja +' </b>  <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Lihat detail pesanan"></span></a><ul class="children collapse" id="coba'+ pesanan[0].id_pesanan +'">    <hr><p class="message"><ol class="menu'+ pesanan[0].id_pesanan +'" type="1"> </ol>   </p><svg class="glyph stroked empty-message"> <span data-toggle="collapse" href="#coba'+ pesanan[0].id_pesanan +'"><use xlink:href="#stroked-empty-message"></use></span></svg><a href="#" class="pull-right">    <input type="button" data-toggle="modal" data-idpesanan="'+ pesanan[0].id_pesanan +'" onclick="return antarkanModal();" class="antarkan-modal btn btn-primary form-control" value="Pesanan siap diantarkan"></a></ul></div>');
                                     
                                     for(var i = 0; i < pesanan.length; i++ ){ 
                                        var item = pesanan[i]; 
                                        $('.menu'+ item.id_pesanan).empty('<li><b><small><i class="fa fa-clock-o"></i>'+ item.nama_makanan_minuman +'</small></b><small><i class="fa fa-clock-o"></i> '+ item.jumlah +' Porsi</small><small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small></li>');
                                    }
                                }else{
                                    $('.daftar-pesanan').append('<div id="item'+ pesanan[0].id_pesanan +'" class="alert bg-primary" role="alert"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/><span data-toggle="collapse" href="#coba'+ pesanan[0].id_pesanan +' "></use></svg> <b> Meja No '+ pesanan[0].nomor_meja +' </b>  <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Lihat detail pesanan"></span></a><ul class="children collapse" id="coba'+ pesanan[0].id_pesanan +'">    <hr><p class="message"><ol class="menu'+ pesanan[0].id_pesanan +'" type="1"> </ol>   </p><svg class="glyph stroked empty-message"> <span data-toggle="collapse" href="#coba'+ pesanan[0].id_pesanan +'"><use xlink:href="#stroked-empty-message"></use></span></svg><a href="#" class="pull-right">    <input type="button" data-toggle="modal" data-idpesanan="'+ pesanan[0].id_pesanan +'" data-nomormeja="'+ pesanan[0].nomor_meja +'" onclick="return antarkanModal();" class="antarkan-modal btn btn-primary form-control" value="Pesanan siap diantarkan"></a></ul></div>');

                                    for(var i = 0; i < pesanan.length; i++ ){ 
                                        var item = pesanan[i];
                                        if(item.status == 0){
                                            $('.menu'+ item.id_pesanan).append('<li><b><small><i class="fa fa-clock-o"></i>'+ item.nama_makanan_minuman +'</small></b><small><i class="fa fa-clock-o"></i> '+ item.jumlah +' Porsi</small><small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small></li>');
                                        } 
                                    }
                                }

						setTimeout(realtimeMethodDaftarPesanan, 1000);
					},
					error:function(){
						setTimeout(realtimeMethodDaftarPesanan, 1000);  
					}
				});
			}
		</script>

<div class="row">
    <div class="daftar-pesanan col-lg-12">
    <input id="id-user" type="hidden" value="{{ Auth::user()->id }}"></input>
        <h2>Daftar Pesanan</h2>

       @foreach ($detailpesanan as $dp)
       @if ( $dp->status == 1 && $dp->id == Auth::user()->id)
        <div id="item{{ $dp->id_pesanan }}" class="alert bg-primary" role="alert">
            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/><span data-toggle="collapse" href="#coba{{ $dp->id_pesanan }}"></use></svg> <b> Meja No {{ substr($dp->id_pesanan, -1) }} </b>  <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Lihat detail pesanan"></span></a>
            <ul class="children collapse" id="coba{{ $dp->id_pesanan }}">    
            <hr>
                <p class="message">
                    <ol class="menu{{ $dp->id_pesanan }}" type="1">
                        @foreach ($pesanan as $p)
                        @if($p->id_pesanan == $dp->id_pesanan && $p->status == 0)
                            <li>
                                <b><small><i class="fa fa-clock-o"></i>{{ $p->nama_makanan_minuman }}</small></b>
                                <small><i class="fa fa-clock-o"></i>  {{ $p->jumlah }} Porsi</small>
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                            </li>
                        @endif
                        @endforeach
                    </ol>   
                </p>
                <svg class="glyph stroked empty-message"> 
                    <span data-toggle="collapse" href="#coba{{ $dp->id_pesanan }}"><use xlink:href="#stroked-empty-message"></use></span>
                </svg>
                <a class="pull-right">    
                    <input type="button" data-toggle="modal" data-idpesanan="{{ $dp->id_pesanan }}" data-nomormeja="{{ substr($dp->id_pesanan, -1) }}" onclick="return antarkanModal();" class="antarkan-modal btn btn-primary form-control" value="Pesanan siap diantarkan">
                </a>
            </ul>
        </div>
        @endif
        @endforeach
        </div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body"> 
                    <input type="hidden" id="id-user"></input>
                    <input type="hidden" id="id-pesanan"></input>
                    <input type="hidden" id="status"></input>
                    <input type="hidden" id="notification"></input>
                    Pesanan Meja-<span id="nomor-meja"></span> Siap Diantarkan ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="antarkan-btn btn btn-success" data-dismiss="modal">Antarkan</button>
                </div>
            </div>
            </div> 
        </div>
</div><!--/.row-->

<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<script>	
		
        function antarkanModal(){
            $(".antarkan-modal").click(function(){
            $('#id-pesanan').val($(this).data('idpesanan'));
            $('#id-user').val($('#id-user').val());
            $('#nomor-meja').text($(this).data('nomormeja'));
            $('#myModal').modal('show');

                //console.log($(this).data('notification'));
			});
        }
			

			$(".antarkan-btn").click(function(e){
				e.preventDefault();

				var id_pesanan = $('#id-pesanan').val();
                var id = $('#id-user').val();
					
				$.ajax({ 
					type:'post',
					url:'{{ url("editdaftarpesanan") }}',							
					data:{_token:'{{ csrf_token() }}', 
							id_pesanan:id_pesanan,
                            id:id},
					success:function(){
					},
				});
			});
</script>
        
            			
@endsection
