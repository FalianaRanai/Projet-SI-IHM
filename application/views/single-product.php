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
              <div id="" class="">
                <ul class="slides">
                    <img src="<?php echo img_loader($produit[0]['Source'], "jpg") ;?>"class="img-fluid" alt="Responsive image" />
                  <!-- items mirrored twice, total of 12 -->
                </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4><?php echo $produit[0]['NomProduit'];?></h4>
              <h6>$<?php echo $produit[0]['Prix'];?></h6>
              <p><?php echo $produit[0]['Description'];?></p>
              <span><?php echo $produit[0]['Stock'];?> left on stock</span>
              <form action="" method="get">
                <label for="quantity">Quantity:</label>
                <span>
                  <span class="minus quantity-text">-</span>
                  <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                  	onfocus="if(this.value == '1') { this.value = ''; }" 
                      onBlur="if(this.value == '') { this.value = '1';}"
                      value="1">
                  <span class="plus quantity-text">+</span>
                </span>
                 <input type="submit" class="button" value="Order Now!">
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><a href="#"><?php echo $nomCategory[0]['NomCategorie'];?></a></h6>
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
              <a href="<?php echo site_url()."Template/singleProduct?id=".$category[$i]['IDProduit'];?>">
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
  </body>
</html>
