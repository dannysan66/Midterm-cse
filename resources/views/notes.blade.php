@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Label</th>
        </tr>
      </thead>
      <tbody>
        <form class="" action="{{route('save.notes')}}" method="post">
          Post : <br><input type="text" name="name" value=""><br>
          Description : <br><textarea name="description"></textarea>
          <input type="submit" name="" value="submit">
        </form>
      </tbody>
    </table>
  </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
