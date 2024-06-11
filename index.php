<?php

include "vendor/autoload.php";

use classes\Product;
use classes\Cart;

$items = new Product();
$products = $items->all();

$carts = new Cart();
$count = $carts->count($_COOKIE['user_id']);

if(!isset($_COOKIE['user_id'])){
  setcookie('user_id', md5(rand()), time()+(60*60*24),"localhost/ecommerce-oop");
}

?>


<?php include "component/header.php"; ?>
  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>

      <div>
        <span>Your Cart</span>
        <span class="badge bg-primary text-white"><?= $count ?></span>
      </div>

      <div class="row">
        <?php foreach($products as $product): ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="<?= $product['image'] ?>" alt="">
              </div>

              <div class="detail-box">
                <h6><?= $product['name'] ?> </h6>
                <h6>Price<span><?= $product['price'] ?></span></h6>
              </div>
              <div class="border text-center p-2 bg-white rounded mt-2">
                <form action="actions/cart-store.php" method="post">
                  <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                  <input type="hidden" name="product_price" value="<?= $product['price'] ?>">
                  <button type="submit" class="btn"><i class="fas fa-cart-arrow-down"></i>Add to cart</button>
                </form>
              </div>

              <div class="new">
                <span>
                  New
                </span>
              </div>

            </a>
          </div>
        </div>
        <?php endforeach; ?>
        
        
      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->
<!-- 
  <section class="about_section  ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end about section -->

  <!-- offer section -->

  <!-- <section class="offer_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="box offer-box1">
            <img src="images/o1.jpg" alt="">
            <div class="detail-box">
              <h2>
                Upto 15% Off
              </h2>
              <a href="">
                Shop Now
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-5 px-0">
          <div class="box offer-box2">
            <img src="images/o2.jpg" alt="">
            <div class="detail-box">
              <h2>
                Upto 10% Off
              </h2>
              <a href="">
                Shop Now
              </a>
            </div>
          </div>
          <div class="box offer-box3">
            <img src="images/o3.jpg" alt="">
            <div class="detail-box">
              <h2>
                Upto 20% Off
              </h2>
              <a href="">
                Shop Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end offer section -->

  <!-- blog section -->
<!-- 
  <section class="blog_section ">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest From Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/b1.jpg" alt="">
              <h4 class="blog_date">
                14 <br>
                July
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Molestiae ad reiciendis dignissimos
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/b2.jpg" alt="">
              <h4 class="blog_date">
                15 <br>
                July
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Dolores vel maiores voluptatem enim
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end blog section -->

  <!-- client section -->
<!-- 
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Samantha Jonas
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Samantha Jonas
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Samantha Jonas
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end client section -->

  <?php include "component/footer.php"; ?>