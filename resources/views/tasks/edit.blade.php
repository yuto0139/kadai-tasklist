@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
  
 <div class="row">
  <div class="col-xs-offset-1 col-xs-9 col-sm-offset-2 col-sm-8">
           
   <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
     
     <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
     </div>
        
     <div class=form-group>
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
     </div>
        
        {!! Form::submit('更新', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
    
  </div>
 </div> 

@endsection