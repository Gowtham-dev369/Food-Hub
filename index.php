<?php
include('./template/header.php')
?>


 <!-- header -->
 <header id="home" class="header">
      <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3">Center fresh &amp; Delightful</h1>
        <!-- <h2 class="display-4 mb-5">Center fresh &amp; Delightful</h2> -->
        <a class="btn btn-lg btn-primary" href="#gallery">View Our gallery</a>
      </div>
    </header>

    <!--  About Section  -->
    

    <!--  gallary Section  -->
    
  <!-- <div id="gallery"class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
      <h2 class="section-title">Our Restaurants</h2>
  </div> -->

  <?php 
  require('./pages/restaurant.php')
  ?>

<!-- 
    <div class="gallary row">

      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-2.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="'./pages/restaurant.php'" class="gallary-overlay">
          <i class="gallary-icon ">Chai Kings</i>

        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-3.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ">Cafe Coffee Day</i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-4.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ">Dabba canteen</i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-5.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon">Vaggi</i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-6.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ">Thot</i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-7.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon">`</i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-8.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      
    </div> -->

    <!-- book a table Section 
    <div
      class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items"
      id="book-table"
    >
      <div class="">
        <h2 class="section-title mb-5">BOOK A TABLE</h2>
        <div class="row mb-5">
          <div class="col-sm-6 col-md-3 col-xs-12 my-2">
            <input
              type="email"
              id="booktable"
              class="form-control form-control-lg custom-form-control"
              placeholder="EMAIL"
            />
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 my-2">
            <input
              type="number"
              id="booktable"
              class="form-control form-control-lg custom-form-control"
              placeholder="NUMBER OF GUESTS"
              max="20"
              min="0"
            />
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 my-2">
            <input
              type="time"
              id="booktable"
              class="form-control form-control-lg custom-form-control"
              placeholder="EMAIL"
            />
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 my-2">
            <input
              type="date"
              id="booktable"
              class="form-control form-control-lg custom-form-control"
              placeholder="12/12/12"
            />
          </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary" id="rounded-btn"
          >FIND TABLE</a
        >
      </div>
    </div> -->

    <!-- BLOG Section  -->
    <div
      id="blog"
      class="container-fluid bg-dark text-light py-5 text-center wow fadeIn"
    >
      <h2 class="section-title py-5">Special Food Available In Our Restuants </h2>
      <div class="row justify-content-center">
        <div class="col-sm-7 col-md-4 mb-5">
          <ul
            class="nav nav-pills nav-justified mb-3"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#foods"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                >Foods</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#juices"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                >Juices</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content" id="pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="foods"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
        >
          <div class="row">
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/blog-1.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹500</a>
                  </h1>
                  <h4 class="pt20 pb20">Burger Plater</h4>
                  <p class="text-white">
                    Veg burger and Non Veg burgers
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/blog-2.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹120</a>
                  </h1>
                  <h4 class="pt20 pb20">Salad Plater</h4>
                  <p class="text-white">
                    Grass and leaves
                      <br>
                      

                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/blog-3.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹80</a>
                  </h1>
                  <h4 class="pt20 pb20">Buns</h4>
                  <p class="text-white">
                    Sweet Bun
                    Aloo Bun
                    Spicy Bun
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="juices"
          role="tabpanel"
          aria-labelledby="pills-profile-tab"
        >
          <div class="row">
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-4.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹150</a>
                  </h1>
                  <h4 class="pt20 pb20">Lime soda</h4>
                  <p class="text-white">
                    Fresh and refreshing limes and chilled soda.
                    <br>
                    
                    

                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-5.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹290</a>
                  </h1>
                  <h4 class="pt20 pb20">Raspberry Pomogrante Smoothie</h4>
                  <p class="text-white">
                    healthy pomogrante with a twist of raspbery.                 </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-6.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹300    </a>
                  </h1>
                  <h4 class="pt20 pb20">Melon Juice</h4>
                  <p class="text-white">
                    Fresh melons from the farm.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- REVIEWS Section  -->
    <div
      id="testmonial"
      class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items py-5"
    >
      <h2 class="section-title my-5 text-center">REVIEWS</h2>
      <div class="row mt-3 mb-5">
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">John Doe</h3>
            <h6 class="testmonial-subtitle">Web Designer</h6>
            <div class="testmonial-body">
              <p>
                Cheta 2 Tea
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Steve Thomas</h3>
            <h6 class="testmonial-subtitle">UX/UI Designer</h6>
            <div class="testmonial-body">
              <p>
                Offer please
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Miranda Joy</h3>
            <h6 class="testmonial-subtitle">Graphic Designer</h6>
            <div class="testmonial-body">
              <p>
                Good Job nigga
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
    id="about"
    class="container-fluid wow fadeIn"
    id="about"
    data-wow-duration="1.5s"
  >
    <div class="row">
      <div class="col-lg-6 has-img-bg"></div>
      <div class="col-lg-6">
        <div class="row justify-content-center">
          <div class="col-sm-8 py-5 my-5">
            <h2 class="mb-4">About Us</h2>
            <p>Our Team
              <br /><br />
              <table>
                <tr>
                  <td>Gowtham V  </td>
                  <td>1MJ21CS402</td>
                </tr>
                <tr>
                  <td>Sankalp M S</td>
                  <td>1MJ20CS254</td>
                </tr>
                <tr>
                  <td>Vageesha T C</td>
                  <td>1MJ20CS227</td>
                </tr>
                <tr>
                  <td> Tharun N </td>
                  <td>1MJ20CS221</td>
                </tr>
              </table>
                 
                 

            </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>

    <!-- CONTACT Section  -->
    <div
      id="contact"
      class="container-fluid bg-dark text-light border-top wow fadeIn"
    >
      <div class="row">
        <div class="col-md-6 px-0">
          <div
            id="map"
            style="width: 100%; height: 100%; min-height: 400px"
          ></div>
        </div>
        <div class="col-md-6 px-5 has-height-lg middle-items">
          <h3>FIND US</h3>
          <div class="text-muted">
            <p><span class="ti-location-pin pr-3"></span> Bangalore</p>
            <p><span class="ti-support pr-3"></span>9876543215</p>
            <p><span class="ti-email pr-3"></span>mvjce@microsoft.com</p>
          </div>
        </div>
      </div>
    </div>

  
    
<?php
include('./template/footer.php')
?>