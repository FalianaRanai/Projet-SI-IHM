<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Ajouter un produit</h1>
  </div>
	<div class="input-group flex-nowrap">
		<form action="<?php echo site_url()."Admin/TraitementAjouterProduit";?>" method="POST">
		  <input type="hidden" name="ajproduit" value="1">	
		  <div class="form-group">
			<h6 style="margin-bottom:20px;">Nom : </h6>
			<input type="text" class="form-control" id="nomCadeau" name="nomProduit" style="width:300px;">
		  </div>
		  <div class="form-group">
			<h6 style="margin-bottom:20px;">Prix : </h6>
			<input type="text" class="form-control" id="pointsCadeau" name="prix" style="width:300px;">
		  </div>
		  <div class="form-group">
			<h6 style="margin-bottom:20px;">Catégories : </h6>
			<?php
					$indice=0;
					foreach($categorie as $cat){
						 $indice++;?>
						 <div class="form-check-inline">
						  <label class="form-check-label" for="radio<?php echo $indice;?>">
							<input type="radio" class="form-check-input" id="radio<?php echo $indice;?>" name="radiocategorie" value="<?php echo $cat['IDCategorie'];?>"><?php echo $cat['NomCategorie'];?>
						  </label>
						</div>
				<?php }?>
				
		  </div>
		  <div class="form-group">
			<h6 style="margin-bottom:20px;">Nom de l'image avec extension : </h6>
			<input type="text" class="form-control" id="imageCadeau" name="imageProduit" style="width:300px;">
		  </div>
		  <button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
	</div>
</main>