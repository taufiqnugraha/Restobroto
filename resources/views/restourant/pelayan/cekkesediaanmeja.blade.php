@extends('layouts.masterpelayan');

@section('content')
<!--2 kursi-->

<ul class="nav menu">
    <li class="parent">
        <a href="#">
            <span data-toggle="collapse" href="#sub-item-1"> <div class="panel-heading"> 2 Kursi </div> </span>
        </a>

        <!--content hide-->    
        <div class="row children" id="sub-item-1">
            @foreach ($mejas as $meja)
                @if($meja->jumlah == 2) 
                       <a id="item{{ $meja->nomor_meja }}" onclick="{{ $meja->status == '0' ? 'return gunakanmodal();' : 'return bersihkanmodal();' }}" class="{{ $meja->status == '0' ? 'gunakan-modal' : 'bersihkan-modal' }}" data-nomormeja="{{ $meja->nomor_meja }}" data-status="{{ $meja->status == '0' ? '1' : '0' }}">    
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="panel {{ $meja->status == '0' ? 'panel-teal' : 'panel-gray' }} panel-widget ">
                                <div class="row no-padding">
                                    <div class="col-sm-3 col-lg-5 widget-left">
                                        <div class="medium-large">{{ $meja->nomor_meja }}</div>
                                    </div>
                                    <div class="col-sm-9 col-lg-7 widget-right">
                                        <div class="text-muted">{{ $meja->status == '0' ? 'Gunakan' : 'Bersihkan' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach             
        </div>
        <!--/content hide-->      
    </li>
</ul>

<!--4 kursi-->
<ul class="nav menu">
    <li class="parent">
        <a href="#">
            <span data-toggle="collapse" href="#sub-item-2"> <div class="panel-heading"> 4 Kursi </div> </span>
        </a>
           <!--content hide-->
        <div class="row children" id="sub-item-2">
            @foreach ($mejas as $meja)
                @if($meja->jumlah == 4)
                   <a id="item{{ $meja->nomor_meja }}" class="{{ $meja->status == '0' ? 'gunakan-modal' : 'bersihkan-modal' }}" href="#" data-nomormeja="{{ $meja->nomor_meja }}" data-status="{{ $meja->status == '0' ? '1' : '0' }}">    
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="panel {{ $meja->status == '0' ? 'panel-teal' : 'panel-gray' }} panel-widget ">
                                <div class="row no-padding">
                                    <div class="col-sm-3 col-lg-5 widget-left">
                                        <div class="medium-large">{{ $meja->nomor_meja }}</div>
                                    </div>
                                    <div class="col-sm-9 col-lg-7 widget-right">
                                        <div class="text-muted">{{ $meja->status == '0' ? 'Gunakan' : 'Bersihkan' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach         
        <!--/content hide--> 
        </div>
    </li>
</ul>

<!--6 kursi-->
<ul class="nav menu">
    <li class="parent">
        <a href="#">
            <span data-toggle="collapse" href="#sub-item-3"> <div class="panel-heading"> 6 Kursi </div> </span>
        </a>
        <div class="row children" id="sub-item-3">
               @foreach ($mejas as $meja)
                @if($meja->jumlah == 6)
                     <a id="item{{ $meja->nomor_meja }}" onclick="{{ $meja->status == '0' ? 'return gunakanmodal();' : 'return bersihkanmodal();' }}" class="{{ $meja->status == '0' ? 'gunakan-modal' : 'bersihkan-modal' }}" data-nomormeja="{{ $meja->nomor_meja }}" data-status="{{ $meja->status == '0' ? '1' : '0' }}">    
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="panel {{ $meja->status == '0' ? 'panel-teal' : 'panel-gray' }} panel-widget ">
                                <div class="row no-padding">
                                    <div class="col-sm-3 col-lg-5 widget-left">
                                        <div class="medium-large">{{ $meja->nomor_meja }}</div>
                                    </div>
                                    <div class="col-sm-9 col-lg-7 widget-right">
                                        <div class="text-muted">{{ $meja->status == '0' ? 'Gunakan' : 'Bersihkan' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach  
        </div>       
    </li>
</ul>

<!--8 kursi-->
<ul class="nav menu">
    <li class="parent">
        <a href="#">
            <span data-toggle="collapse" href="#sub-item-8"> <div class="panel-heading"> 8 Kursi </div> </span>
        </a>
        <div class="row children" id="sub-item-8">
            @foreach ($mejas as $meja)
                @if($meja->jumlah == 8)
                    <a id="item{{ $meja->nomor_meja }}" onclick="{{ $meja->status == '0' ? 'return gunakanmodal();' : 'return bersihkanmodal();' }}" class="{{ $meja->status == '0' ? 'gunakan-modal' : 'bersihkan-modal' }}" data-nomormeja="{{ $meja->nomor_meja }}" data-status="{{ $meja->status == '0' ? '1' : '0' }}">    
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="panel {{ $meja->status == '0' ? 'panel-teal' : 'panel-gray' }} panel-widget ">
                                <div class="row no-padding">
                                    <div class="col-sm-3 col-lg-5 widget-left">
                                        <div class="medium-large">{{ $meja->nomor_meja }}</div>
                                    </div>
                                    <div class="col-sm-9 col-lg-7 widget-right">
                                        <div class="text-muted">{{ $meja->status == '0' ? 'Gunakan' : 'Bersihkan' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach         
        </div>
    </li>
</ul>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" >&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" id="body"></h4>
                <input type="hidden" id="nomormeja">
                <input type="hidden" id="status">
                <input type="hidden" id="link">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn actionBtn" data-dismiss="modal">
                    <span id="footer-action-button" class="glyphicon"></span>
                </button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove">Batal </span>
                </button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<script>
		function gunakanmodal(){
			$(".gunakan-modal").click(function(){
                var today = new Date();

				console.log('dsl');
				$('#body').text('Gunakan Meja '+ $(this).data('nomormeja') +'');
				$('#nomormeja').val($(this).data('nomormeja'));
				$('#link').val('/tambahpesanan/'+ $(this).data('nomormeja') +'/' + today.getDate() + (today.getMonth()+1) + today.getFullYear() + today.getHours() + '0' + $(this).data('nomormeja'));
				$('#status').val($(this).data('status'));
				$('#footer-action-button').text('Gunakan');
				$('#myModal').modal('show');
			});
		}
			
		function bersihkanmodal(){
			$(".bersihkan-modal").click(function(){
				$('#body').text('Bersihkan Meja '+ $(this).data('nomormeja') +'');
				$('#footer-action-button').text('Bersihkan');
				$('#link').val('#');
				$('#nomormeja').val($(this).data('nomormeja'));
				$('#status').val($(this).data('status'));
				$('#myModal').modal('show');
			});
		}	

			$(".actionBtn").click(function(e){
				e.preventDefault();

				var nomor_meja = $('#nomormeja').val();
				var status = $('#status').val();
				var link = $('#link').val();
				console.log(nomor_meja);
				console.log(status);
					///$('.chat-box').append('<div class="alert alert-info">'+ msg +'</div>');
				$.ajax({ 
					type:'post',
					url:'{{ url("/meja/editmeja") }}',							
					data:{_token:'{{ csrf_token() }}', 
							nomor_meja:nomor_meja,
							status:status},
					success:function(){
						window.location.href = link; 
					},
				});
			});

		$(function(){
            realtimeMethod();
        });

        function realtimeMethod(){
            $.ajax({
                url:'{{ url("ajax") }}',    
                data:{_token: '{{ csrf_token() }}'},
                success:function(data){
					for(var i = 0; i < data.length; i++ ){
						var item = data[i];  
					    console.log(item.nomor_meja);
						$('#item'+ item.nomor_meja).replaceWith('<a id="item'+ item.nomor_meja +'" onclick="'+ (item.status == "0" ? "return gunakanmodal();" : "return bersihkanmodal();") +'" class="'+ (item.status == "0" ? "gunakan-modal" : "bersihkan-modal") +'" data-nomormeja="'+ item.nomor_meja +'" data-status="'+ (item.status == "0" ? "1" : "0") +'"><div class="col-xs-12 col-md-6 col-lg-3"><div class="panel '+ (item.status == "0" ? "panel-teal" : "panel-gray") +' panel-widget "><div class="row no-padding"><div class="col-sm-3 col-lg-5 widget-left"><div class="medium-large"> '+  item.nomor_meja  +' </div></div><div class="col-sm-9 col-lg-7 widget-right"><div class="text-muted">'+ (item.status == "0" ? "Gunakan" : "Bersihkan") +'</div></div></div></div></div></a>');
					}
				   // $('.chat-box').append('<div class="alert alert-info">'+ data['msg'] +'</div>'); 
                    setTimeout(realtimeMethod, 1000);
                },
                error:function(){
                    setTimeout(realtimeMethod, 1000);
                }
            });
        }
		</script>

@endsection