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
        <div class="comic-info-section">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h1>{{$comic['title']}}</h1>
                        <div class="green-nav">
                            <div class="green-nav-left">
                                <span>U.S. Price: <span class="price">{{$comic['price']}}</span></span>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="green-nav-right">
                                <nobr><span>Check Availability</span></nobr>
                            </div>
                        </div>
                        <div class="comic-description">
                            <p>{{$comic['description']}}</p>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="advertising">
                            <span>advertisement</span>
                            <img src="/img/adv.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        




    </section>
@endsection