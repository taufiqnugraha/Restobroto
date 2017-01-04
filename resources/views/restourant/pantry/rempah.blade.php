@extends('layouts.masterpantry');

@section('content')
 <!--content hide-->
        <div class="row children" id="sub-item-1">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-teal panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <img src="{{ asset('/images/birama.png') }}" hight="50px" width="50px">
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="text-muted">Cengkeh</div>
                            <div class="text-muted">Stok : 20</div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-teal panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <img src="{{ asset('/images/birama.png') }}" hight="50px" width="50px">
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="text-muted">Cengkeh</div>
                            <div class="text-muted">Stok : 30</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection