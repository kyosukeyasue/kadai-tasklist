@extends('layouts.app')

@section('content')
    
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasks</h1>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'Sign up', [], ['class' => 'btn btn-lg btn-primary']) !!}
            
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('login', 'login', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>

@endsection