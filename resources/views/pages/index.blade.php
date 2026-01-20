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
    <div class="products_grid">
        <div class="container">
            <div class="product_content">
                <section class="category" id="cold-appetizers">
                    <h2 class="category_title">Холодные закуски</h2>
                    <div class="dishes_grid">
                        <div class="cards">
                            <div class="card">
                                <div class="quantity">5</div>
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <button class="counter">
                                            <img src="{{asset('images/icons/dec.png')}}">
                                        </button>
                                        <p>620 ₽</p>
                                        <button class="counter">
                                            <img src="{{asset('images/icons/inc.png')}}">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="category" id="hot-appetizers">
                    <h2 class="category_title">Горячие закуски</h2>
                    <div class="dishes_grid">
                        <div class="cards">
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="quantity">5</div>
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <button class="counter">
                                            <img src="{{asset('images/icons/dec.png')}}">
                                        </button>
                                        <p>620 ₽</p>
                                        <button class="counter">
                                            <img src="{{asset('images/icons/inc.png')}}">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="category" id="meat-dishes">
                    <h2 class="category_title">Мясные блюда</h2>
                    <div class="dishes_grid">
                        <div class="cards">
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <p>620 ₽</p>
                                        <a class="basket_price">
                                            <div class="basket_content">
                                                <span class="title">В корзину</span>
                                                <div class="icon_basket">
                                                    <img src="{{asset('images/icons/Buy.png')}}">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="quantity">5</div>
                                <div class="top_content">
                                    <div class="images">
                                        <img src="{{asset('images/icons/ProdCard.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="bottom_content">
                                    <div class="top_title">
                                        <h1>Ягненок</h1>
                                        <p>Вес: 225 г</p>
                                    </div>
                                    <div class="description">
                                        <span>
                                            Фаршированный гречневой кашей,
                                            курагой, апельсином и зеленым яблоком
                                        </span>
                                    </div>
                                    <div class="price">
                                        <button class="counter">
                                            <img src="{{asset('images/icons/dec.png')}}">
                                        </button>
                                        <p>620 ₽</p>
                                        <button class="counter">
                                            <img src="{{asset('images/icons/inc.png')}}">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
