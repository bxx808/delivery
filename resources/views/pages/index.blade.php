@extends('layout.main')

@section('content')
    <div class="header">
        <div class="container">
            <div class="header_content">
                <div class="logo">
                    <h1>Logos</h1>
                </div>
                <div class="search">
                    <div class="left_content">
                        <div class="map_icon">
                            <img src="{{asset('/images/icons/Location.png')}}" alt="">
                        </div>
                        <input class="search_input" placeholder="Введите адрес доставки">
                    </div>
                    <div class="right_content">
                        <div class="search_icon">
                            <img src="{{asset('/images/icons/Search.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact_logo">
                        <img src="{{asset('images/icons/Calling.png')}}" alt="">
                    </div>
                    <div class="number">
                        <p>Контакты:</p>
                        <strong>+7 (917) 510-57-59</strong>
                    </div>
                </div>
                <div class="basket">
                    <div class="title">Корзина</div>
                    <div class="quantity">4</div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="main_content">
            </div>
        </div>
    </div>
@endsection
