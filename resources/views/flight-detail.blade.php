@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<section>
    @foreach($detail as $details) <!-- Duyet array use for or foreach ok -->
    <h2>{{$details[0]->place_from}} <i class="glyphicon glyphicon-arrow-right"></i> {{$details[0]->place_to}} </h2>
    <article>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4><strong></strong></h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">From:</label>
                                <div><big class="time">{{$details[0]->time_from}}</big></div>
                                <div><span class="place">{{$details[0]->place_from}} </span></div>
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label">To:</label>
                                <div><big class="time">{{$details[0]->time_to}}</big></div>
                                <div><span class="place">{{$details[0]->place_to}} </span></div>
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label">Duration:</label>
                                <div><big class="time">{{$details[0]->duration}}</big></div>
                                <div><strong class="text-danger">{{$details[0]->transit}} Transit </strong></div>
                            </div>
                            <div class="col-sm-3 text-right">
                                <h3 class="price text-danger"><strong>{{$details[0]->code}} </strong></h3>
                                <div>
                                    <a href="{{route('flight_book',[$details[0]->id])}}" class="btn btn-primary">Choose</a>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#flight-detail-tab">Flight Details</a></li>
                            <li><a data-toggle="tab" href="#flight-price-tab">Price Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="flight-detail-tab" class="tab-pane fade in active">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h5>
                                            <strong class="airline">{{$details[0]->airways_name}} - {{$details[0]->code}}</strong>
                                            <p><span class="flight-class">Economy</span></p>
                                        </h5>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div><big class="time">{{$details[0]->time_from}}</big></div>
                                                        <div><small class="date">29 Apr 2017</small></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div><span class="place">{{$details[0]->place_from}}</span></div>
                                                        <div><small class="airport">{{$details[0]->airport_from}}</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <i class="glyphicon glyphicon-arrow-right"></i>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div><big class="time">{{$details[0]->time_to}}</big></div>
                                                        <div><small class="date">29 Apr 2017</small></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div><span class="place">{{$details[0]->place_to}}</span></div>
                                                        <div><small class="airport">{{$details[0]->airport_to}}</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 text-right">
                                                <label class="control-label">Duration:</label>
                                                <div><strong class="time">{{$details[0]->duration}}</strong></div>
                                            </div>
                                        </div>
                                    </li>
                                   <!--  <li class="list-group-item list-group-item-warning">
                                        <ul>
                                            <li>Transit for 1h 30m in Doha (DOH)</li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item">
                                        <h5>
                                            <strong class="airline">Qatar Airways QR-1052</strong>
                                            <p><span class="flight-class">Economy</span></p>
                                        </h5>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div><big class="time">00:50</big></div>
                                                        <div><small class="date">30 Apr 2017</small></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div><span class="place">Doha (DOH)</span></div>
                                                        <div><small class="airport">Doha Hamad International Airport</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <i class="glyphicon glyphicon-arrow-right"></i>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div><big class="time">02:55</big></div>
                                                        <div><small class="date">30 Apr 2017</small></div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div><span class="place">Abu Dhabi (AUH)</span></div>
                                                        <div><small class="airport">Abu Dhabi Intl</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 text-right">
                                                <label class="control-label">Duration:</label>
                                                <div><strong class="time">2h 5m</strong></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> 
                            <div id="flight-price-tab" class="tab-pane fade">
                                <h5>
                                    <strong class="airline">Qatar Airways</strong>
                                    <p><span class="flight-class">Economy</span></p>
                                </h5>-->
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="pull-left">
                                            <strong>Passengers Fare (x3)</strong>
                                        </div>
                                        <div class="pull-right">
                                            <strong>IDR24.796.650,00</strong>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-left">
                                            <span>Tax</span>
                                        </div>
                                        <div class="pull-right">
                                            <span>Included</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="list-group-item list-group-item-info">
                                        <div class="pull-left">
                                            <strong>You Pay</strong>
                                        </div>
                                        <div class="pull-right" style="color: red">
                                            <strong>VND {{$details[0]->total_sit}}</strong>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    @endforeach
</section>
@endsection