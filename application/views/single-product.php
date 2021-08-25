    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Single Product</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="<?php echo img_loader($produit[0]['Source'], "jpg") ;?>" />
                  </li>
                  <li>
                    <img src="assets/images/big-02.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/big-03.jpg" />
                  </li>
                  <li>
                    <img src="assets/images/big-04.jpg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>Single Product Name</h4>
              <h6>$55.00</h6>
              <p><?php echo $produit[0]['Description'];?></p>
              <span>7 left on stock</span>
              <form action="" method="get">
                <label for="quantity">Quantity:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">
                <input type="submit" class="button" value="Order Now!">
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><a href="#">Pants</a>,<a href="#">Women</a>,<a href="#">Lifestyle</a></span></h6>
                </div>
                <div class="share">
                  <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>You May Also Like</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">

            <?php for($i=0;$i<count($category);$i++){?>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="<?php echo img_loader($category[$i]['Source'],"jpg");?>" alt="Item 1">
                  <h4><?php echo $category[$i]["NomProduit"];?></h4>
                  <h6>$<?php echo $category[$i]["Prix"];?></h6>
                </div>
              </a>
            <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Similar Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo js_loader('jquery.min');?>"></script>
    <script src="<?php echo js_loader('bootstrap.bundle');?>"></script>


    <!-- Additional Scripts -->
    <script src="<?php echo js_loader('custom');?>"></script>
    <script src="<?php echo js_loader('owl');?>"></script>
    <script src="<?php echo js_loader('isotope');?>"></script>
    <script src="<?php echo js_loader('flex-slider');?>"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
