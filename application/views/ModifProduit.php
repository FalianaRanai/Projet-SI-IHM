<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Modifier un produit</h1>
  </div>
	<div class="row">
		<div class="col-md-10 offset-1">
			<table class="table table-light  table-striped">
			  <thead>
				<tr>
				  <th scope="col"></th>	
				  <th scope="col">ID</th>
				  <th scope="col">Nom du produit</th>	
				  <th scope="col">Prix</th>
				  <th scope="col">Catégorie</th>
				   <th scope="col">Source</th>	
				  <th scope="col"></th>
				</tr>
			  </thead>	
			  <tbody>
				<?php foreach($produit as $prod){?>
				<form action="#" method="get">
					<input type="hidden" name="modifProd" value="1">
					<tr class="light">
					  <th scope="row" id="lminiature"><img src=<?php echo img_loader($prod['Source'], "jpg");?> class="img-fluid" width="100px;"></th>
					  <td>
						<div id="lsouhait">
							<?php echo $prod['IDProduit'];?>
							<input type="hidden" name="idCadeau" value="<?php echo $prod['IDProduit'];?>">
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<input type="text" name="NomCadeau" value="<?php echo $prod['NomProduit'];?>" style="width:100px;"/>
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<input type="text" name="Points" value="<?php echo $prod['Prix'];?>" style="width:100px;"/>
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<input type="text" name="Categorie" value="<?php echo $prod['IDCategorie'];?>" style="width:100px;"/>
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<input type="text" name="Image" value="<?php echo $prod['Source'];?> " style="width:100px;"/>
						</div>
					  </td>
					  <td>
						<div id="bsouhait">
							<input type="submit" class="btn btn-primary" value="Modifier"></a>
						</div>
					  </td>
					</tr>
				</form>
			<?php }?>
			  </tbody>
			</table>
		</div>
	</div>
</main>