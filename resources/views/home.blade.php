@extends('layouts.app')

@section('main')
<section class="section-comics">
    <div class="container">
        <div class="section-title">
            <h1>current series</h1>
        </div>

        <div class="comics-container">
            <div class="row wrap">
                @foreach ($comics as $index => $comic)
                    <div class="col-2 pad-15 mb-30">
                        <a href="{{route('detail', ['id' => $index])}}">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{$comic['thumb']}}" alt="">
                                </div>
                                <div class="card-descr">
                                    <h4>{{$comic['series']}}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="btn-brand">load more</button>
        </div>
    </div>
</section>
<section class="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="menu-card">
                    <img src="/img/buy-comics-digital-comics.png" alt="">
                    <span>digital comics</span>
                </div>
            </div>
            <div class="col-5">
                <div class="menu-card">
                    <img src="/img/buy-comics-merchandise.png" alt="">
                    <span>digital comics</span>
                </div>
            </div>
            <div class="col-5">
                <div class="menu-card">
                    <img src="/img/buy-comics-subscriptions.png" alt="">
                    <span>digital comics</span>
                </div>
            </div>
            <div class="col-5">
                <div class="menu-card">
                    <img src="/img/buy-comics-shop-locator.png" alt="">
                    <span>digital comics</span>
                </div>
            </div>
            <div class="col-5">
                <div class="menu-card">
                    <img src="/img/buy-dc-power-visa.svg" alt="">
                    <span>digital comics</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection    