@extends('layouts.app')

@section('main')
    <section>
        {{var_dump($comic)}}
        <h1>{{$comic['title']}}</h1>
    </section>
@endsection