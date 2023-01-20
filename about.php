<?php require_once("includes/header.php") ?>

    <h1 class="titlu_despre text-center"><u>ABOUT</u></h1>
    <div class="d-flex justify-content-between" style="padding-bottom: 5cm;">
        <img class="founder_pic" src="images/fondator.jpg" alt="">
            
        <div>
            <h2 class="founder_nume">Marcel Nistreanu</h2>
            <p class="founder_history">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac sagittis ante. 
                Vestibulum metus quam, viverra id mi sit amet, efficitur sagittis felis. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                Cras at sapien eget turpis porta pellentesque at eu ex. Praesent eget augue nibh. 
                Praesent sit amet enim vehicula, aliquam ligula vel, fringilla ante. Donec dictum 
                tellus quis lobortis tincidunt. Phasellus dui neque, tempus vitae volutpat sit amet, 
                tempor ut massa. Cras posuere velit et blandit vestibulum. Pellentesque sed congue 
                leo. Vivamus sagittis interdum ex, ut aliquet tellus sagittis laoreet.
            </p>
        </div>
    </div>

    
    
    <div style="background-color: #171717;">
        <h1 class="text-center" style="padding-top: 4cm; font-family: Lato, sans-serif; color: white;"><u style="border-bottom: 2px solid white;">Echipa restaurantului Marcelino</u></h1>
        <div class="echipa container" style="padding-bottom: 4cm;">
            <div class="row">
                <div class="d-flex justify-content-between">
                        <div class="card" style="width: 20rem;">
                            <img src="images/fondator.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">CEO</h5>
                              <p class="card-text" style="color: black;">Marcel Nistreanu</p>
                            </div>
                        </div>
                    
                        <div class="card" style="width: 30rem;">
                            <img src="images/chef.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Chef</h5>
                              <p class="card-text" style="color: black;">Xi Yang</p>
                            </div>
                        </div>
                    
                        <div class="card" style="width: 20rem;">
                            <img src="images/chelner.jpg" class="card-img-top"  alt="">
                            <div class="card-body">
                              <h5 class="card-title">Chelner</h5>
                              <p class="card-text" style="color: black;">Vasile Vasilescu</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    


    <h1 class="titlu_concepte text-center"><u>Conceptele restaurantului în poze</u></h1>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slide1.jpg" class="slide d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="mt-3">Pulpă de rață cu sos de portocale</h5>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide3.jpg" class="slide d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bucătarul în acțiune</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide4.jpg" class="slide d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Terasa restaurantului</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide2.jpg" class="slide d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide5.jpg" class="slide d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

<?php require_once("includes/footer.php") ?>