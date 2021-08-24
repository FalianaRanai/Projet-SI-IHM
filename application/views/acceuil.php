 <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">

            <?php for($i=0;$i<count($produit);$i++){?>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="<?php echo img_loader('item-01','jpg');?>" alt="Item 1">
                  <h4><?php echo $produit[$i]['NomProduit'];?></h4>
                  <h6>$<?php echo $produit[$i]['Prix'];?></h6>
                  <?php echo $admin[0]['Username'];?>
                </div>
              </a>
            <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->