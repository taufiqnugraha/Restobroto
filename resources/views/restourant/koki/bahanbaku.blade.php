@extends('layouts.masterkoki');

@section('pesanan')


			
			<div class="row">
                
				
			<div class="col-md-6">
			
				<div class="panel panel-blue">
					

					<div class="panel-heading dark-overlay"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Sayur</div>
					<div class="panel-body">
						<ul class="todo-list">
						<li class="todo-list-item">
						
								
								<table class="table">	
									<thead>
										<th>Nama</th>
										<th>QTY</th>
										<th>Notify</th>
									</thead>
									<tbody>
									<?php foreach($daftar_list as $daftar_list): ?>
									<tr>
									<td>{{$daftar_list->nama_bahanbaku}}</td>
									<td>{{$daftar_list->qty}}</td>
									<td> 
									<input type="button" data-target="#popup"  data-toggle="modal" class="btn btn-primary form-control" value="Notify">
                                                 </span></a>
                                                 <div id="popup" class="modal fade" role="dialog">
                                                     <div class="modal-dialog"> 
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                    Notify
                                                                    <button type="button" class="close" data-dismiss="modal">
                                                                    &times;</button>
                                                            </div>
                                                            <div class="modal-body">Bahan Baku tinggal sedikit</div>
                                                        
                                                            <div class="modal-footer">
                                                                 <button type="button" class="btn btn-success" data-dismiss="modal">
                                                                Notify</button>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                     </div> 
									
									</tr>
										<?php endforeach ?>
									
									
									</tbody>
								</table>
									
								
								
							
					

					
												
									
						
						</ul>
					</div>
                  </div>
				  
                </div>
			
			<div class="row">
                
				
			<div class="col-md-6 ">
			
				<div class="panel panel-blue">

					<div class="panel-heading dark-overlay"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Buah Buahan</div>
					<div class="panel-body">
						<ul class="todo-list">
						<li class="todo-list-item">
						
								<table class="table">	
									<thead>
										<th>Nama</th>
										<th>QTY</th>
										<th>Notify</th>
									</thead>
									<tbody>
									
									</table>
							

							
				</div>  
                </div>
			<div class="row">
                
				
			<div class="col-md-6 ">
			
				<div class="panel panel-blue">

					<div class="panel-heading dark-overlay"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Daging</div>
					<div class="panel-body">
						<ul class="todo-list">
						<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Wortel</label>
									
								</div>

							
									
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Update Basecamp</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Send email to Jane</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Drink coffee</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Drink coffee</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Drink coffee</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Do some work</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Tidy up workspace</label>
								</div>
								
							</li>
						</ul>
					</div>
                  </div>
				  
                </div>
			<div class="col-md-6 ">
			
				<div class="panel panel-blue">

					<div class="panel-heading dark-overlay"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>To-do List</div>
					<div class="panel-body">
						<ul class="todo-list">
						<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Wortel</label>
									
								</div>

							
									
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Update Basecamp</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Send email to Jane</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Drink coffee</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Drink coffee</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Drink coffee</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Do some work</label>
								</div>
								
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">Tidy up workspace</label>
								</div>
								
							</li>
						</ul>
					</div>
                  </div>
				  
                </div>
			
@endsection