@extends('adminlte::page')

@section('title', 'Buyers')

@section('content_header')
    <h1>Buyers</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $customer->full_name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Phone Number</dt>
            <dd class="col-sm-9">{{ $customer->phone_number }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $customer->email }}</dd>
        </dl>
    </div>
@stop

