<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Supprimer un produit</h1>
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
				  <th scope="col"></th>
				</tr>
			  </thead>	
			  <tbody>
				<?php foreach($produit as $prod){?>
				<tr class="light">
				  <th scope="row" id="lminiature"><img src=<?php echo img_loader($prod['Source'], "jpg");?> class="img-fluid" width="100px;"></th>
				  <td>
					<div id="lsouhait">
						<?php echo $prod['IDProduit'];?>
					</div>
				  </td>
				  <td>
					<div id="lsouhait">
						<?php echo $prod['NomProduit'];?>
					</div>
				  </td>
				  <td>
					<div id="lsouhait">
						<?php echo $prod['Prix'];?>
					</div>
				  </td>
				  <td>
					<div id="lsouhait">
						<?php
							for($i=0; $i<count($categorie); $i++)
							{
								if($prod['IDCategorie']==$categorie[$i]["IDCategorie"])
								{
									echo $categorie[$i]['NomCategorie'];
								}
							} 
							
						?>
					</div>
				  </td>
				  <td>
					<div id="bsouhait">
						<a href="#" style="text-decoration:none;"><button type="button" class="btn btn-danger">Supprimer</button></a>
					</div>
				  </td>
				</tr>
			<?php }?>
			  </tbody>
			</table>
		</div>
	</div>
</main>