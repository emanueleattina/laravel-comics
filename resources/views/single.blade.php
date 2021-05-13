@extends('layouts.app')

@section('main')
    <section class="section-single-comic">
        <div class="cover-section">
            <div class="container">
                <div class="cover">
                    <div class="type">
                        <span>{{$comic['type']}}</span>
                    </div>
                    <div class="view-gallery">
                        <span>view gallery</span>
                    </div>
                    <img src="{{$comic['thumb']}}" alt="">
                    
                </div>
            </div>
        </div>
        




        {{-- <h1>{{$comic['title']}}</h1> --}}
    </section>
@endsection