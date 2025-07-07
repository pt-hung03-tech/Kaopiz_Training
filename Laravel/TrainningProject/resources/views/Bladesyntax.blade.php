@extends('app')

@section('title', 'Phạm Tiến Hưng - Web Developer')

@section('content')
    <h1>xin chào {{$name}} ! </h1>
    @if($age >= 18)
        <p>Bạn đã đủ tuổi trưởng thành.</p>
    @else
        <p>Bạn chưa đủ tuổi trưởng thành.</p>
    @endif
    <h3>Đây là nhưng ngôn ngữ làm trình bạn nên học</h3>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
@endsection