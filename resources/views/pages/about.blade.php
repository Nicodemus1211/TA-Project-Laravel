@extends('layout.app')

@section('title')
    Travelark - About Us
@endsection

@section('content')
<div class="container">
    <div class="row py-5 bumper my-auto align-items-center">
      <div class="col-md-8 col-12 p-4 bglight">
        <h1 class="my-3 fww gelap">Travelark</h1>
        <p class="pr-5">
          Travelark is a technology company that provides a comprehensive suite of services and solutions to travel agents and tour operators. Based in Indonesia, the company was founded with the mission of revolutionizing the travel
          industry by leveraging the latest technologies and innovative ideas.
        </p>
        <h5 class="btnexplore mt-5 fww">
          <span class="pointer"> Find out who we are <i class="fa-regular fa-circle-right btnexplore ml-2"></i> </span>
        </h5>
      </div>
      <div class="col-md-4 my-4 col-12">
        <div class="imggedung"></div>
      </div>
    </div>
  </div>

  <!-- Our value for our Travelers start -->
  <div class="bgijoflip">
    <div class="martop">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-12 text-white">
            <h1 class="fww">
              Our Value <br />
              <span class="oren">for Our Travelers</span>
            </h1>
            <p>We offer a wide range of services and have many choices of travel packages to accompany your trip. In addition, we also uphold corporate values.</p>
          </div>
          <div class="col-md-6 col-12 text-white">
            <div class="row d-flex">
              <div class="col-md-6 col-12 my-3">
                <div class="cardputih">
                  <div class="d-flex mb-2">
                    <img class="my-auto mr-2" src="assets/img/card1.png" alt="" />
                    <h4 class="my-auto oren fww">Innovations</h4>
                  </div>
                  <p class="text-dark">Innovating in Service to Our Travel Customers</p>
                </div>
              </div>
              <div class="col-md-6 col-12 my-3">
                <div class="row">
                  <div class="col">
                    <!-- <div class="cardputihtengah"> -->
                    <div class="cardputih">
                      <div class="d-flex mb-2">
                        <img class="my-auto mr-2" src="assets/img/card2.png" alt="" />
                        <h4 class="my-auto oren fww">Out Ethics</h4>
                      </div>
                      <p class="text-dark">Prioritizing Happy Traveling, Upholding Culture</p>
                    </div>
                    <!-- </div> -->
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12 my-3">
                <div class="cardputih">
                  <div class="d-flex mb-2">
                    <img class="my-auto mr-2" src="assets/img/card3.png" alt="" />
                    <h4 class="my-auto oren fww">Responsibility</h4>
                  </div>
                  <p class="text-dark">Trusted And Experienced Travel Management</p>
                </div>
              </div>
              <div class="col-md-6 col-12 my-3">
                <div class="cardputih">
                  <div class="d-flex mb-2">
                    <img class="my-auto mr-2" src="assets/img/card3.png" alt="" />
                    <h4 class="my-auto oren fww">Responsibility</h4>
                  </div>
                  <p class="text-dark">Trusted And Experienced Travel Management</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Our value for our Travelers end -->

  <!-- Our Package start -->
  <div class="container mt-5">
    <h4 class="btnexplore2 fww text-center">Our Package</h4>
    <p class="oren fww text-center">More than one destination you will visit</p>
    <div class="row text-white">
      <div class="col-md-6 col-12">
        <div class="bgijo1">
          <span class="oren">1st Package</span>
          <h4 class="fww mb-3">Private Trip</h4>
          <p>Enjoy the luxury of having your own private guide, who will take you to hidden gems and off-the-beaten-path locations that you won't find in any guidebook.</p>
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
          <h4 class="fww mb-3">Open Trip</h4>
          <p>With an open trip, you'll have the opportunity to connect with travelers from all over the world, creating lifelong friendships and unforgettable memories.</p>
          <span class="clouds1"><i class="fas fa-cloud"></i></span>
          <span class="clouds2"><i class="fas fa-cloud"></i></span>
          <span class="clouds3"><i class="fas fa-cloud"></i></span>
          <span class="clouds4"><i class="fas fa-cloud"></i></span>
          <span class="clouds5"><i class="fas fa-cloud"></i></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Our Package end -->

  <!-- Most picked destination start -->
  <div class="container">
    <p class="oren mt-5 pt-5">Recommended Destinations</p>
    <div class="d-flex justify-content-between">
      <h4 class="fww">Most Picked Destination</h4>
      <button type="button" class="btn btn-success px-5">See all</button>
    </div>
    <div class="row text-white wrapper2">
      <div class="col-xl-3 col-12">
        <div class="item">
          <div class="gambarrelated">
            <h4>Nusa Penida</h4>
            <br />
            <p>Kelungkung, Bali</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-12">
        <div class="item2">
          <div class="gambarrelated">
            <h4>Pulau Komodo</h4>
            <br />
            <p>Nusa Tenggara Timur</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-12">
        <div class="item3">
          <div class="gambarrelated">
            <h4>Candi Bodobudur</h4>
            <br />
            <p>Magelang, Jawa Tengah</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-12">
        <div class="item4">
          <div class="gambarrelated">
            <h4>Gunung Bromo</h4>
            <br />
            <p>Tengger, Jawa Timur</p>
          </div>
        </div>
      </div>
      <!-- Wonderful Destination end -->
    </div>
  </div>
  <!-- Most picked destination end -->

  <!-- help -->
  <div class="container">
    <h3 class="fww btnexplore d-flex justify-content-center mt-5 pt-5">Need our help?</h3>
    <p class="oren d-flex justify-content-center mb-5 pb-3">Contact us freely to get any information you need.</p>

    <form action="" method="POST" role="form">
      <div class="form-group">
        <div class="row">
          <div class="col-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">First Name</label>
            <input type="text" class="form-control" id="" placeholder="First Name" />
          </div>
          <div class="col-6 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="" placeholder="Last Name" />
          </div>
        </div>
        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
        <input type="text" class="form-control mb-3" id="" placeholder="Email" />
        <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
        <input type="text" class="form-control mb-3" id="" placeholder="Phone Number" />
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="6"></textarea>
      </div>
      <button type="submit" class="btn btn-outline-success mb-5">Submit</button>
    </form>
  </div>
@endsection