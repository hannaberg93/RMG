@extends('layouts/app')

@section('content')
    <div class="container mt-4">
        <h1>Rent my gear</h1>
    </div>

    <div class="container welcome-content mt-4">
      <div class="view" style="background-image: url('https://images.unsplash.com/photo-1468495244123-6c6c332eeece?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="row welcome-text p-4">
          <div class="col-md-4 text-secondary text-center bg-light text-md-left m-3">

            <h3 class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              iste.</h3>
          </div>
        </div>
      </div>

      <div class="container">
      <div class="row info-start mt-4">
        <div class="col-md-6 order-md-2 mt-4">
          <h2 class="featurette-heading"><span class="text-muted">Har du massa prylar som ligger och skräpar?</span></h2>
          <p class="">Att samla på sig saker som bara behövs en kortare tid ter sig meningslöst. Alltfler upptäcker
            att det är bättre att hyra eller låna de saker som inte används så ofta. Ofta tas exemplet borrmaskin,
            som sägs användas i snitt 15 minuter per borrmaskin i privat ägo.
            Idag växer marknaden för att hyra och det går att hyra allt från verktyg, partytält, filmer,
            maskeradkläder till skidutrustning.</p>
        </div>
        <div class="col-md-6 mt-4">
          <img class="featurette-image img-fluid mx-auto" src="https://na.rdcpix.com/714843328/959d825f748972bf924f14e1a04efa01w-c0xd-w685_h860_q80.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <div class="row info-start">
        <div class="col-md-8 mt-4">
          <h2 class="featurette-heading"><span class="text-muted">Delandets ekonomi</span></h2>
          <p class="">Att hyra eller låna är en del i vad som nu alltmer kommer under namnet Delandets ekonomi eller
            Kollaborativ ekonomi. Ordet kollaborativ syftar på att det är en form av samarbete.
            Det är ett sätt att mer resurseffektivt dela på saker samtidigt som man minskar de privata utläggen för
            att få tillgång när man behöver. </p>
        </div>
        <div class="col-md-4 mt-4 mb-4">
          <img class="featurette-image img-fluid mx-auto" src="https://businessfirstfamily.com/wp-content/uploads/2018/06/earning-money-beginner-investors-how-to-invest-to-make-money.jpg" alt="Generic placeholder image">
        </div>
      </div>

    </div>
      <div class="row info-texts-start">
        <div class="col-md-4 p-4">
          <p class="graphic-icon text-center"><i class="fas fa-recycle" style="font-size: 6em; color:cadetblue;"></i></p>
          <p>Lorem ipsum dolor amet succulents pok pok poutine, venmo cray vexillologist heirloom.
            Bitters shoreditch keytar, biodiesel ethical pabst af tote bag pork belly intelligentsia street art cray
            kombucha selfies. Air plant unicorn raclette kinfolk snackwave woke live-edge celiac drinking vinegar.
            Trust fund air plant marfa pickled photo booth.</p>
        </div>
        <div class="col-md-4 p-4">
          <p class="graphic-icon text-center"><i class="fas fa-hand-holding-usd" style="font-size: 6em; color:cadetblue;"></i></p>
          <p>Lorem ipsum dolor amet succulents pok pok poutine, venmo cray vexillologist heirloom.
            Bitters shoreditch keytar, biodiesel ethical pabst af tote bag pork belly intelligentsia street art cray
            kombucha selfies. Air plant unicorn raclette kinfolk snackwave woke live-edge celiac drinking vinegar.
            Trust fund air plant marfa pickled photo booth.</p>
        </div>

        <div class="col-md-4 p-4">
          <p class="graphic-icon text-center"><i class="far fa-smile" style="font-size: 6em; color:cadetblue;"></i></p>
          <p>Lorem ipsum dolor amet succulents pok pok poutine, venmo cray vexillologist heirloom.
            Bitters shoreditch keytar, biodiesel ethical pabst af tote bag pork belly intelligentsia street art cray
            kombucha selfies. Air plant unicorn raclette kinfolk snackwave woke live-edge celiac drinking vinegar.
            Trust fund air plant marfa pickled photo booth.</p>
        </div>
      </div>
      <!--end info-texts-start-->



          <div class="bild-karusell mt-3 mb-3">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner h-500px">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://ya-webdesign.com/images/transparent-electronics-home-2.png" alt="First slide">

          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn3.bigcommerce.com/s-kat3ce9ch8/product_images/uploaded_images/camping-with-friends.jpg?t=1468959236" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://cb177844f9e01b9ae273-d05a78cf04aa2f2e245285855a4094c9.ssl.cf1.rackcdn.com/DSC_3260.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

   <!-- <div class="view" style="background-image: url('https://www.dmcgroup.eu/wp-content/uploads/2017/12/notebook-2386034-1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="col-7 trending-words m-2 p-2">

        <h1 class="bg-light text-secondary p-2">Populära kategorier</h1>

        <button type="button" class="btn btn-light btn-sm m-2">Secondary</button>
        <button type="button" class="btn btn-light btn-sm m-2">Secondary</button>
        <button type="button" class="btn btn-light btn-sm m-2">Secondary</button>
        <button type="button" class="btn btn-light btn-sm m-2">Secondary</button>
        <button type="button" class="btn btn-light btn-sm m-2">Secondary</button>
        <button type="button" class="btn btn-light btn-sm m-2">Secondary</button>
        <button type="button" class="btn btn-light btn-sm m-2">Secondary</button>
      </div>
    </div>-->



</div>


@endsection