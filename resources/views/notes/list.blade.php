@extends('adminlte::page')

@section('title', 'Buyers')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Equipment ID</th><th style="width: 40px">Services</th><th style="width: 40px">Software</th>
      </thead>
      <tbody>
        @foreach($notes AS $notes)
        <tr>
          <td>{{ $notes->id }}</td>
          <td>{{ $notes->equipment_id }}</td>
          <td>{{ $notes->services }}</td>
          <td>{{ $notes->software }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('notes.show',['notes'=>$notes->id]) }}" style="float:right;">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('notes.create') }} " class="btn btn-primary" >Create</a>



@stop
