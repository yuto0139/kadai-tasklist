@extends('layouts.app')

@section('content')
    
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    
    @else
        <div class="center jumbotron col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10">
            <div class="text-center">
                <h1>Welcome to the TaskList</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-info']) !!}
            </div>
        </div>
    @endif
@endsection