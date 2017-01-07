@extends('layouts.masterkoki');

@section('content')
<div class="row">
    <div class="col-lg-12">
        <input id="id-user" type="hidden" value="{{ Auth::user()->id }}"></input>
        <h2>Daftar Pesanan</h2>

       @foreach ($detailpesanan as $dp)
       @if ($dp->status == 0 && $dp->id == Auth::user()->id)
        <div class="alert bg-primary" role="alert">
            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/><span data-toggle="collapse" href="#coba{{ $dp->id_pesanan }}"></use></svg> <b> Meja No {{ substr($dp->id_pesanan, -1) }} </b>  <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Lihat detail pesanan"></span></a>

            <ul class="children collapse" id="coba{{ $dp->id_pesanan }}">    
            <hr>
                <p class="message">
                		
                    <ol type="1">
                        @foreach ($pesanan as $p)
                        @if($p->id_pesanan == $dp->id_pesanan)
                            <li>
                                <b><small><i class="fa fa-clock-o"></i>{{ $p->nama_makanan_minuman }}</small></b>
                                <small><i class="fa fa-clock-o"></i>  {{ $p->jumlah }} Porsi</small>
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                            </li>
                            <br>
                        @endif
                        @endforeach
                    
                    </ol>   
                
                </p>

                <svg class="glyph stroked empty-message"> 
                    <span data-toggle="collapse" href="#coba{{ $dp->id_pesanan }}"><use xlink:href="#stroked-empty-message"></use></span>
                </svg>

                <a href="#" class="pull-right">    
                    <input type="button" data-target="#popup"  data-toggle="modal" class="btn btn-primary form-control" value="Pesanan siap diantarkan">
                </a>
            </ul>
        </div>
        @endif
        @endforeach

        <div id="popup" class="modal fade" role="dialog">
            <div class="modal-dialog"> 
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                        &times;</button>
                </div>
                <div class="modal-body"> Antarkan Pesanan Meja-<span id="nomor_meja">7</span> ?</div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">
                    Antarkan</button>
                </div>
            </div>
            </div> 
        </div>
</div><!--/.row-->
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
						// $('.notification').replaceWith('<span class="notification badge panel-red">'+ data +'<span>');
						setTimeout(realtimeMethodDaftarPesanan, 1000);
					},
					error:function(){
						setTimeout(realtimeMethodDaftarPesanan, 1000);
					}
				});
			}
		</script>
            			
@endsection
