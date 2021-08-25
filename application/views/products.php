<!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">All Products</button>
              <button class="btn btn-primary" data-filter=".homme">Homme</button>
              <button class="btn btn-primary" data-filter=".femme">Femme</button>
              <button class="btn btn-primary" data-filter=".enfant">Enfant</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
          <?php for($i=0; $i<count($produit); $i++)
          {
            ?>
              <?php 
                if($produit[$i]['IDCategorie']==1)
                {
              ?>
                  <div id=<?php echo $produit[$i]['IDCategorie']; ?> class="item homme col-md-4">
                  <a href="<?php echo site_url()."Template/singleProduct?id=".$produit[$i]['IDProduit']; ?>">
                    <div class="featured-item">
                      <img src=<?php echo img_loader($produit[$i]['Source'], "jpg"); ?> alt="">
                      <h4><?php echo $produit[$i]['NomProduit']; ?></h4>
                      <h6><?php echo "$".$produit[$i]['Prix']; ?></h6>
                    </div>
                  </a>
                </div> 
              <?php 
                 } 
               ?>  

               <?php 
                if($produit[$i]['IDCategorie']==2)
                {
              ?>
                  <div id=<?php echo $produit[$i]['IDCategorie']; ?> class="item femme col-md-4">
                  <a href="<?php echo site_url()."Template/singleProduct?id=".$produit[$i]['IDProduit']; ?>">
                    <div class="featured-item">
                      <img src=<?php echo img_loader($produit[$i]['Source'], "jpg"); ?> alt="">
                      <h4><?php echo $produit[$i]['NomProduit']; ?></h4>
                      <h6><?php echo "$".$produit[$i]['Prix']; ?></h6>
                    </div>
                  </a>
                </div> 
              <?php 
                 } 
               ?>

               <?php 
                if($produit[$i]['IDCategorie']==3)
                {
              ?>
                  <div id=<?php echo $produit[$i]['IDCategorie']; ?> class="item enfant col-md-4">
                  <a href="<?php echo site_url()."Template/singleProduct?id=".$produit[$i]['IDProduit']; ?>">
                    <div class="featured-item">
                      <img src=<?php echo img_loader($produit[$i]['Source'], "jpg"); ?> alt="">
                      <h4><?php echo $produit[$i]['NomProduit']; ?></h4>
                      <h6><?php echo "$".$produit[$i]['Prix']; ?></h6>
                    </div>
                  </a>
                </div> 
              <?php 
                 } 
               ?>  

            <?php
          }
          ?>
        </div>
    </div>