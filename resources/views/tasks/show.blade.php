@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
  <div class="row">
   <div class="col-xs-offset-1 col-xs-9 col-sm-offset-2 col-sm-8">
    
    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-hover">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>コンテンツ</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-info']) !!}
        
   </div>
  </div> 
  
@endsection