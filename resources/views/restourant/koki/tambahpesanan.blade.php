@extends('layouts.masterkoki');

@section('content')


			        
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Tambah Pesanan</h2>
                                <div class="alert bg-primary" role="alert">
                                   <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                                   <span data-toggle="collapse" href="#coba"></use></svg>Mie Goreng <a href="#" class="pull-right">
                                   
                                  <input type="button" data-target="#popup"  data-toggle="modal" class="btn btn-primary form-control" value="Tambah">
						          
                                     
                                    </span></a>
                                                 </div>
                                                 <div id="popup" class="modal fade" role="dialog">
                                                     <div class="modal-dialog"> 
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                    Tambah Pesanan
                                                                    <button type="button" class="close" data-dismiss="modal">
                                                                    &times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{url('siswa')}}" method="POST" >
            	
                                                                <div class="form-group">
                                                                    <label for="menu" class="control-label">Jumlah</label>
                                                                    <input name="menu" id="menu" type="text" placeholder="Jumlah ex:1,2,3.." class="form-control"> 
                                                                </div>
                                                            </form>
                                                        </div>
                                                            
                                                            <div class="modal-footer">
                                                                 <button type="button" class="btn btn-success" data-dismiss="modal">
                                                                Antarkan</button>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                     </div> 
                                                 </div>
                                        
                                    </li>
            
                                </div>
                                
                                
                            </div><!--/.row-->
                            <div class="alert bg-primary" role="alert">
                                   <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                                   <span data-toggle="collapse" href="#coba"></use></svg>Ayam Penyet <a href="#" class="pull-right">
                                   
                                  <input type="button" data-target="#popup"  data-toggle="modal" class="btn btn-primary form-control" value="Tambah">
						          
                                     
                                    </span></a>


                            </div>
            			
@endsection