@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
  <div class="row">
   <div class="col-xs-offset-1 col-xs-9 col-sm-offset-2 col-sm-8">
       
    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
    
        <table class="table table-striped">
          <thead>
             <tr>
                <th>id</th>
                <th>コンテンツ</th>
                <th>ステータス</th>
             </tr>
          </thead>
        　<tbody>
            　@foreach ($tasks as $task)
            　  <tr>
    　　            <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
        　　        <td>{{ $task->content }}</td>
            　　    <td>{{ $task->status }}</td>
                </tr>
              @endforeach
        　</tbody>
        </table>
        
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-info']) !!}
   
   </div>
  </div> 

@endsection