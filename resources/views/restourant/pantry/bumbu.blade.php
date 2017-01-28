@extends('layouts.masterpantry');

@section('content')
 <!--content hide-->
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Advanced Table</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
                                <tr>
                                    <th data-field="state" data-checkbox="true" >Item ID</th>
                                    <th data-field="nama_bahan_baku" data-sortable="true"><b>Nama</b></th>
                                    <th data-field="stok"  data-sortable="true"><b>Stok</b></th>
                                    <th data-field="updated_at" data-sortable="true"><b>Tgl Penambahan</b></th>
                                    <th data-field="harga" data-sortable="true"><b>Harga</b></th>
                                </tr>
						    </thead>
                            <tbody>
                               @foreach($bumbu as $item)
                                <tr>
                                    <td  data-checkbox="true"> Item ID </td>
                                    <td  data-sortable="true"> {{ $item->nama_bahan_baku }} </td>
                                    <td  data-sortable="true"> {{$item->stok}} </td>
                                    <td  data-sortable="true"> {{$item->updated_at}} </td>
                                    <td  data-sortable="true"> {{$item->harga}} </td>
                                    <td  data-sortable="true">
                                       <ul class="todo-list">
                                            <li class="todo-list-item"> 
                                            <div class="pull-right action-buttons">
                                                <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                                <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                                <form method="get" action="{{url('edit')}}">
                                                    <input type="hidden" name="id_bahan_baku" value="{{ $item->id_bahan_baku }}">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                    </a>
                                                </form>
                                                <form method="post" action="{{url('/deletebumbu')}}">
                                                    <div class="form-group">
                                                    
                                                    <input type="hidden" name="id_bahan_baku" value="{{ $item->id_bahan_baku }}">
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                </form>    
                                            </div>
                                            </li>
                                        </ul>  
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	   

@endsection