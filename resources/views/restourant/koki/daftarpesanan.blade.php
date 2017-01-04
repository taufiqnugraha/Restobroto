@extends('layouts.masterkoki');

@section('content')


			        
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Daftar Pesanan</h2>
                                <div class="alert bg-primary" role="alert">
                                   <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/><span data-toggle="collapse" href="#coba"></use></svg> Meja No 7.  <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Lihat detail pesanan"></span></a>
                                    <ul type="1" class="children collapse" id="coba">
						          
                                        <a class="" href="#">
                                           <hr>
                                            <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                               <ol type="1">
                                               <li>
                                                Kentang goreng
                                               
                                            </a>
                                            
                                            </p>
                                        </a>
                                    
                                        <a class="" href="#">
                                           
                                            <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                               <li>
                                                Teh Manis
                                                </ol>
                                                
                                            </a>
                                            
                                            </p>
                                        </a>
                                         <svg class="glyph stroked empty-message"> 
                                                 <span data-toggle="collapse" href="#coba2"><use xlink:href="#stroked-empty-message">
                                                 </use></svg> <a href="#" class="pull-right">
                                                 
                                                 <input type="button" data-target="#popup"  data-toggle="modal" class="btn btn-primary form-control" value="Pesanan siap diantarkan">
                                                 </span></a>
                                                 <div id="popup" class="modal fade" role="dialog">
                                                     <div class="modal-dialog"> 
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                    Pesanan Meja-7
                                                                    <button type="button" class="close" data-dismiss="modal">
                                                                    &times;</button>
                                                            </div>
                                                            <div class="modal-body">1. Ketang Goreng</div>
                                                            <div class="modal-body">2. Teh Manis</div>
                                                            <div class="modal-footer">
                                                                 <button type="button" class="btn btn-success" data-dismiss="modal">
                                                                Antarkan</button>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                     </div> 
                                                 </div>
                                            <ul class="children collapse" id="coba2">
                                    </li>
            
                                </div>
                                <div class="alert bg-primary" role="alert">
                                    <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/> <span data-toggle="collapse" href="#pesanan2"></use></svg> Meja No 7.  <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Lihat detail pesanan"></span></a>
                                    <ul class="children collapse" id="pesanan2">
						           
                                        <a class="" href="#">
                                           <hr>
                                            <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                                <ol type="1">
                                                <li>
                                                Kentang goreng
                                            </a>
                                            
                                            </p>
                                        </a>
                                        <a class="" href="#">
                                           
                                            <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                                <li>
                                                Kentang goreng
                                                </ol>
                                            </a>
                                            
                                            </p>
                                        </a>
                                                <svg class="glyph stroked empty-message"> 
                                                 <span data-toggle="collapse" href="#coba2"><use xlink:href="#stroked-empty-message">
                                                 </use></svg> <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Pesanan siap diantarkan">
                                                 </span></a>
                                            <ul class="children collapse" id="coba2">
                                            
            
                                </div>
                                 <div class="alert bg-primary" role="alert">
                                 <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                                     <span data-toggle="collapse" href="#pesanan3"></use></svg> Meja No 7.  <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Lihat detail pesanan"></span></a>
                                    <ul class="children collapse" id="pesanan3">
						            
                                        <a class="" href="#">
                                           <hr>
                                            <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                                <ol type="1">
                                                <li>
                                                Kentang goreng
                                            </a>
                                            
                                            </p>
                                        </a>
                                        <a class="" href="#">
                                           
                                            <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                                <li>
                                                Kentang goreng
                                                </ol>
                                            </a>
                                            
                                            </p>
                                        </a>
                                    
                                    <svg class="glyph stroked empty-message"> 
                                                 <span data-toggle="collapse" href="#coba2"><use xlink:href="#stroked-empty-message">
                                                 </use></svg> <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Pesanan siap diantarkan">
                                                 </span></a>
                                            <ul class="children collapse" id="coba2">
                                </div>
                        </div><!--/.row-->
            			
@endsection