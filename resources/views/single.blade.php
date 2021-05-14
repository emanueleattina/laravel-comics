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
        <div class="comic-spec-section">
            <div class="container">
                <div class="row mar-15">
                    <div class="col-6 pad-15">
                        <div class="rows-container">
                            <h1>Talent</h1>
                            <div class="row border-top">
                                <div class="col-5">
                                    <span class="title-spec">Art By</span>
                                </div>

                                <div class="col-7">
                                    @foreach ($comic['artists'] as $artist)
                                        <span class="descr-spec"><a>{{$artist}}</a></span>
                                        @if (!$loop->last)
                                            <span>,</span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="row border-top border-bottom">
                                <div class="col-5">
                                    <span class="title-spec">Written by:</span>
                                </div>

                                <div class="col-7">
                                    @foreach ($comic['writers'] as $writer)
                                        <span class="descr-spec"><a>{{$writer}}</a></span>
                                        @if (!$loop->last)
                                            <span>,</span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-6 pad-15">
                        <div class="rows-container">
                            <h1>Specs</h1>
                            <div class="row border-top">
                                <div class="col-5">
                                    <span class="title-spec">Series:</span>
                                </div>

                                <div class="col-7">
                                    <span class="text-uppercase"><a>{{$comic['series']}}</a></span>
                                </div>
                            </div>
                            <div class="row border-top">
                                <div class="col-5">
                                    <span class="title-spec">U.S. Price:</span>
                                </div>

                                <div class="col-7">
                                    <span class="descr-spec">{{$comic['price']}}</span>
                                </div>
                            </div>
                            <div class="row border-top border-bottom">
                                <div class="col-5">
                                    <span class="title-spec">On Sale Date:</span>
                                </div>

                                <div class="col-7">
                                    <span class="descr-spec">{{$comic['sale_date']}}</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        




    </section>
@endsection