@extends('backLayout.app')
@section('title','Tableau de bord')
@section('content')
@include('flashy::message')

<div class="row-one">
    <div class="col-md-4 widget">
        <div class="stats-left ">
            <h5>Today</h5>
            <h4>Sales</h4>
        </div>
        <div class="stats-right">
            <label> 45</label>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 widget states-mdl">
        <div class="stats-left">
            <h5>Today</h5>
            <h4>Visitors</h4>
        </div>
        <div class="stats-right">
            <label> 80</label>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 widget states-last">
        <div class="stats-left">
            <h5>Today</h5>
            <h4>Orders</h4>
        </div>
        <div class="stats-right">
            <label>51</label>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
@endsection
