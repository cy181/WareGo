@extends('layout.layout')

@section('custom-css')
<link rel="stylesheet" href='{{asset("css/home.css")}}' />
@endsection

@section('page-title')
<title>WareGo</title>
@endsection

@section('page-content')
<div class="bg-main-page"></div>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="{{asset('images/main-carousel/main-food.png')}}" class="d-block w-100" alt="Image_1" />
        <p>Smart supply, swift shelves, less hassle</p>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="{{asset('images/main-carousel/main-dairy.png')}}" class="d-block w-100" alt="Image_2" />
        <p>
          Keep your supermarket fully stocked with zero hassle and maximum
          speed
        </p>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="{{asset('images/main-carousel/main-spice.png')}}" class="d-block w-100" alt="Image_3" />
        <p>
          The easiest way to fill your shelves and keep your business moving
          fast.
        </p>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="overlay"></div>
  <h1 class="main-headings">RESTOCK YOUR GOODS</h1>

  <div class="product-cards">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card" onclick="window.location.href = 'meat.html'" style="cursor: pointer">
          <div class="card-gallery" data-bs-ride="carousel">
            <div class="card-main">
              <img src="{{asset('images/meat/Meat.png')}}" alt="Meat" />
            </div>

            <div class="card-wrap">
              <div id="wrapCarouselMeat" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="3000">
                    <div class="img-wrapper">
                      <img src="{{asset('images/meat/beef.png')}}" alt="Beef" />
                      <span>Beef</span>
                    </div>
                    <div class="img-wrapper">
                      <img src="{{asset('images/meat/chicken.jpg')}}" alt="Chicken" />
                      <span>Chicken</span>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="img-wrapper">
                      <img src="{{asset('images/meat/mutton.png')}}" alt="Mutton" />
                      <span>Mutton</span>
                    </div>
                    <div class="img-wrapper">
                      <img src="{{asset('images/meat/pork.png')}}" alt="Pork" />
                      <span>Pork</span>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#wrapCarouselMeat"
                  data-bs-slide="prev" onclick="event.stopPropagation()">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#wrapCarouselMeat"
                  data-bs-slide="next" onclick="event.stopPropagation()">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <span>MEAT</span>
            </h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" onclick="window.location.href = 'dairy.html'" style="cursor: pointer">
          <div class="card-gallery" data-bs-ride="carousel">
            <div class="card-main">
              <img src="{{asset('images/dairy/dairy.png')}}" alt="Dairy" />
            </div>

            <div class="card-wrap">
              <div id="wrapCarouselDairy" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="3000">
                    <div class="img-wrapper">
                      <img src="{{asset('images/dairy/milk.png')}}" alt="Milk" />
                      <span>Milk</span>
                    </div>
                    <div class="img-wrapper">
                      <img src="{{asset('images/dairy/bread.png')}}" alt="Bread" />
                      <span>Bread</span>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="img-wrapper">
                      <img src="{{asset('images/dairy/egg.png')}}" alt="Egg" />
                      <span>Egg</span>
                    </div>
                    <div class="img-wrapper">
                      <img src="{{asset('images/dairy/cheese.jpg')}}" alt="Cheese" />
                      <span>Cheese</span>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#wrapCarouselDairy"
                  data-bs-slide="prev" onclick="event.stopPropagation()">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#wrapCarouselDairy"
                  data-bs-slide="next" onclick="event.stopPropagation()">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <span>DAIRY</span>
            </h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" onclick="window.location.href = 'vegetable.html'" style="cursor: pointer">
          <div class="card-gallery" data-bs-ride="carousel">
            <div class="card-main">
              <img src="{{asset('images/veges/vegetable.png')}}" alt="Meat" />
            </div>

            <div class="card-wrap">
              <div id="wrapCarouselVegetable" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="3000">
                    <div class="img-wrapper">
                      <img src="{{asset('images/veges/califlower.png')}}" alt="Califlower" />
                      <span>Califlower</span>
                    </div>
                    <div class="img-wrapper">
                      <img src="{{asset('images/veges/carrot.png')}}" alt="Carrot" />
                      <span>Carrot</span>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="img-wrapper">
                      <img src="{{asset('images/veges/onion.png')}}" alt="Onion" />
                      <span>Onion</span>
                    </div>
                    <div class="img-wrapper">
                      <img src="{{asset('images/veges/lettuce.png')}}" alt="Lettuce" />
                      <span>Lettuce</span>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#wrapCarouselVegetable"
                  data-bs-slide="prev" onclick="event.stopPropagation()">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#wrapCarouselVegetable"
                  data-bs-slide="next" onclick="event.stopPropagation()">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <span>VEGETABLE</span>
            </h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" onclick="window.location.href = 'fruit.html'" style="cursor: pointer">
          <div class="card-gallery" data-bs-ride="carousel">
            <div class="card-main">
              <img src="{{asset('images/fruit/fruit.jpg')}}" alt="Fruit" />
            </div>

            <div class="card-wrap">
              <div id="wrapCarouselFruit" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="3000">
                    <div class="img-wrapper">
                      <img src="{{asset('images/fruit/berry.jpg')}}" alt="Berry" />
                      <span>Berry</span>
                    </div>
                    <div class="img-wrapper">
                      <img src="{{asset('images/fruit/banana.png')}}" alt="Banana" />
                      <span>Banana</span>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="img-wrapper">
                      <img src="{{asset('images/fruit/grape.jpg')}}" alt="Grape" />
                      <span>Grape</span>
                    </div>
                    <div class="img-wrapper">
                      <img src="{{asset('images/fruit/lemon.jpg')}}" alt="Lettuce" />
                      <span>Lemon</span>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#wrapCarouselFruit"
                  data-bs-slide="prev" onclick="event.stopPropagation()">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#wrapCarouselFruit"
                  data-bs-slide="next" onclick="event.stopPropagation()">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <span>FRUIT</span>
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h1 class="main-headings">PRODUCTS ON DISCOUNT</h1>
  <div class="product-cards">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural
              lead-in to additional content.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural
              lead-in to additional content.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural
              lead-in to additional content.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural
              lead-in to additional content.
            </p>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

@section('custom-js')
<script src='{{asset("js/main.js")}}'></script>
@endsection