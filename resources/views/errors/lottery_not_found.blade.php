@extends('errors.layout')
@section('title')彩票不存在@endsection
@section('content')

    <h3>允许的彩票为：</h3>
    <ul>
        @foreach(\App\Lottery::all() as $lottery)
        <li>
            {{ $lottery -> title }}: {{ $lottery -> id }}
        </li>
        @endforeach
    </ul>
@endsection
