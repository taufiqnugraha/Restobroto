@extends('layouts.masterpelayan');

@section('content')

<!--Meja section-->
<div class="row">
<div class="col-md-12">
<div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-1"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg>
Meja No. 1</div>
    </span>    
    <div class="panel-body children collapse" id="sub-item-1">
        <ol type="1">
            <li>
                <div class="checkbox">
                    <label for="checkbox">Burger</label>
                </div>
            </li>
            <li>
                <div class="checkbox">
                    <label for="checkbox">Juice Lemon</label>
                </div>
            </li>
            <li>
                <div class="checkbox">
                    <label for="checkbox">Special Fried Rice</label>
                </div>
            </li>
            <li>
                <div class="checkbox">
                    <label for="checkbox">Drink coffee</label>
                </div>
            </li>
            <li>
                <div class="checkbox">
                    <label for="checkbox">Teh Manis</label>
                </div>
            </li>
        </ol>
    </div>
    <div class="panel-footer">
        <button type="submit" class="btn btn-primary">
            Pesanan Sudah Diantarkan
        </button>
    </div>


</div><!--/col-->
</div><!--/row-->




@endsection