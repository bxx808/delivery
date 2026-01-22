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
    <div class="navbar">
        <div class="container">
            <div class="navbar_content">
                <div class="items">
                    <div class="item">
                        <a href="#">Холодные закуски</a>
                    </div>
                    <div class="item">
                        <a href="#">Горячие закуски</a>
                    </div>
                    <div class="item">
                        <a href="#">Мясные блюда</a>
                    </div>
                    <div class="item">
                        <a href="#">Супы</a>
                    </div>
                    <div class="item">
                        <a href="#">Рыбные блюда</a>
                    </div>
                    <div class="item">
                        <a href="#">Гриль меню</a>
                    </div>
                    <div class="item">
                        <a href="#">Фирменные блюда</a>
                    </div>
                    <div class="item">
                        <a href="#">Напитки</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="contact_content">
                <div class="contact_card">
                    <h1>Контакты</h1>
                    <img src="{{asset('images/icons/line-contact.png')}}">
                    <div class="items">
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('images/icons/location-contact.png')}}" alt="">
                            </div>
                            <div class="item_content">
                                <span>Наш адрес:</span>
                                <strong>МО, городской округ Красногорск, село Ильинкое, Экспериментальная улица,
                                    10</strong>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('images/icons/mail-contact.png')}}">
                            </div>
                            <div class="item_content">
                                <span>Наша почта:</span>
                                <strong>auto.wash@gmail.com</strong>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('images/icons/line-contact.png')}}">
                    <div class="call_contact">
                        <button>Забронировать стол</button>
                        <div class="num">
                            <strong>+7 (917) 510-57-59</strong>
                            <p>Звоните или оставляйте заявку</p>
                        </div>
                    </div>
                    <div class="socials">
                        <p>Мы в соц сетях:</p>
                        <a href="#">
                            <img src="{{asset('images/icons/socials/facebook.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{asset('images/icons/socials/vkontakte.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{asset('images/icons/socials/video-play-button.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{asset('images/icons/socials/instagram.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="logos">
                    <div class="arrow">
                        <img src="{{asset('images/icons/arrow.png')}}">
                    </div>
                    <div class="logos_info">
                        <h2>Logos</h2>
                        <p>© ООО СК «АПШЕРОН» <br>
                            Все права защищены. 2010-2020</p>
                        <a href="#">Пользовательские соглашения</a>
                        <a href="#">Карта сайта</a>
                        <a href="#">Политика конфиденциальности</a>
                    </div>
                </div>
                <div class="links">
                    <a href="">О ресторане</a>
                    <a href="">Условия доставки</a>
                    <a href="">Возврат товара</a>
                    <a href="">Акции</a>
                </div>
            </div>
        </div>
    </div>
@endsection
