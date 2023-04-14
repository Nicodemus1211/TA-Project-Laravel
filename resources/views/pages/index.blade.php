@extends('layout.app')

@section('title')
    Travelark
@endsection


@section('content')
<div class="container">
    <div class="row py-3 bumper my-auto align-items-center">
        <div class="col-md-8 col-12 p-5 py-2 bglight">
            <h1 class="my-3 fww gelap">Exploring Wonderful Indonesia</h1>
            <p>At Wonderful Indonesia, we believe that travel should be an unforgettable experience, and we're
                dedicated to making sure that every moment you spend with us is one to remember. So why wait? Book
                your adventure today and discover the magic of Indonesia.</p>
            <h5 class="btnexplore mt-5 pointer fww">Explore Now <i
                    class="fa-regular fa-circle-right btnexplore"></i>
            </h5>
        </div>
        <div class="imgabsolute1">
        </div>
    </div>

    <!-- Most picked destination start -->
    <div class="container mb-5">
        <p class="oren mt-5 pt-5">Recommended Destinations</p>
        <div class="d-flex justify-content-between">
            <h4 class="fww">Most Picked Destination</h4>
            <button type="button" class=" btn btn-success px-5">See all</button>
        </div>
        <div class="row text-white wrapper2">
            <div class="col-xl-3 col-12">
                <div class="item">
                    <div class="gambarrelated">
                        <h4>Nusa Penida</h4><br>
                        <p>Kelungkung, Bali</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-12">
                <div class="item2">
                    <div class="gambarrelated">
                        <h4>Pulau Komodo</h4><br>
                        <p>Nusa Tenggara Timur</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-12">
                <div class="item3">
                    <div class="gambarrelated">
                        <h4>Candi Bodobudur</h4><br>
                        <p>Magelang, Jawa Tengah</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-12">
                <div class="item4">
                    <div class="gambarrelated">
                        <h4>Gunung Bromo</h4><br>
                        <p>Tengger, Jawa Timur</p>
                    </div>
                </div>
            </div>
            <!-- Wonderful Destination end -->
        </div>
    </div>
    <!-- Most picked destination end -->

</div>

<div class="bgijo">
    <div class="martop">
        <div class="container">
            <!-- The Best Early Travel Experience start -->
            <div class="row align-items-center">
                <div class="col-md-6 col-12 text-white">
                    <h1 class="fww">
                        The Best Early <br>
                        <span class="oren">Travel Experience</span>
                    </h1>
                    <p>We offer a wide range of services and have many choices of travel packages to accompany your
                        trip. In addition, we also uphold corporate values.</p>
                </div>
                <div class="col-md-6 col-12 text-white">
                    <div class="row d-flex">
                        <div class="col-md-6 col-12 my-3">
                            <div class="cardputih">
                                <div class="d-flex mb-2">
                                    <img class="my-auto mr-2" src="./assets/img/card1.png"
                                        alt="">
                                    <h4 class="my-auto oren fww">Innovations</h4>
                                </div>
                                <p class="text-dark">
                                    Innovating in Service to Our Travel Customers
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 my-3">
                            <div class="row">
                                <div class="col">
                                    <!-- <div class="cardputihtengah"> -->
                                    <div class="cardputih ">
                                        <div class="d-flex mb-2">
                                            <img class="my-auto mr-2"
                                                src="./assets/img/card2.png" alt="">
                                            <h5 class="my-auto oren fww">Our Ethics</h4>
                                        </div>
                                        <p class="text-dark">
                                            Prioritizing Happy Traveling, Upholding Culture
                                        </p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 my-3">
                            <div class="cardputih">
                                <div class="d-flex mb-2">
                                    <img class="my-auto mr-2" src="./assets/img/card3.png"
                                        alt="">
                                    <h4 class="my-auto oren fww">Responsibility</h4>
                                </div>
                                <p class="text-dark">
                                    Trusted And Experienced Travel Management
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 my-3">
                            <div class="cardputih">
                                <div class="d-flex mbb">
                                    <img class="my-auto mr-2" src="./assets/img/card3.png"
                                        alt="">
                                    <h4 class="my-auto oren fww">Responsibility</h4>
                                </div>
                                <p class="text-dark">
                                    Trusted And Experienced Travel Management
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Best Early Travel Experience end -->
        </div>
    </div>
</div>

<!-- Our Package start -->
<div class="container mt-5">
    <h4 class="btnexplore fww text-center">Our Package</h4>
    <p class="oren fww text-center">More than one destination you will visit</p>
    <div class="row text-white">
        <div class="col-md-6 col-12">
            <div class="bgijo1">
                <span class="oren">1st Package</span>
                <h4 class="fww mb-3">Private Trip</h4>
                <p>Enjoy the luxury of having your own private guide, who will take you to hidden gems and
                    off-the-beaten-path locations that you won't find in any guidebook.</p>
                <span class="clouds1"><i class="fas fa-cloud"></i></span>
                <span class="clouds2"><i class="fas fa-cloud"></i></span>
                <span class="clouds3"><i class="fas fa-cloud"></i></span>
                <span class="clouds4"><i class="fas fa-cloud"></i></span>
                <span class="clouds5"><i class="fas fa-cloud"></i></span>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="bgijo2">
                <span class="oren">2st Package</span>
                <h4 class="fww">Open Trip</h4>
                <p>With an open trip, you'll have the opportunity to connect with travelers from all over the world,
                    creating lifelong friendships and unforgettable memories. </p>
                <span class="clouds1"><i class="fas fa-cloud"></i></span>
                <span class="clouds2"><i class="fas fa-cloud"></i></span>
                <span class="clouds3"><i class="fas fa-cloud"></i></span>
                <span class="clouds4"><i class="fas fa-cloud"></i></span>
                <span class="clouds5"><i class="fas fa-cloud"></i></span>
            </div>
        </div>
    </div>

    <div class="bgijo1 text-white">
        <div class="row">
            <div class="col-md-7 col-12">
                <h3 class="fww"><span class="oren">Get 15%</span> for your <span class="oren">first trip</span></h3>
                <p>Attention all first-time travelers! We're excited to offer an exclusive discount just for you.
                    Book your
                    first trip with us today and receive 10% off your entire journey.</p>
            </div>
            <div class="col-md-5 col-12 d-flex align-items-center  justify-content-center">
                <button type="button" class=" btn btn-success px-5">Get Started</button>
            </div>
        </div>
    </div>
</div>
@endsection