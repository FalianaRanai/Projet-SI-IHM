<br><br>
<main role="main" class="col-md-10 offset-1">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Liste d'achat</h1>
  </div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-light  table-striped">
			  <thead>
				<tr>
				  <th scope="col">Numero de caisse</th>	
				  <th scope="col">Nom du produit</th>
				  <th scope="col">Aperçu du produit</th>	
				  <th scope="col">Prix Unitaire</th>
				  <th scope="col">Quantité</th>
				  <th scope="col">Total</th>	
				  <th scope="col"></th>
				</tr>
			  </thead>	
			  <tbody>
				<?php for($i=0;$i<count($liste);$i++){?>
				<form action="<?php echo site_url("Validation");?>" method="POST">
					<input type="hidden" name="modifProd" value="1">
					<tr class="light">
					  <td>
						<div id="lsouhait">
							<?php echo $liste[$i]['NumeroCaisse'];?>
							<input type="hidden" name="idAchat" value="<?php echo $liste[$i]['IDAchat'];?>">
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<?php echo $liste[$i]['NomProduit'];?>
							<input type="hidden" name="NomProduit" value="<?php $liste[$i]['NomProduit']; ?>">
							<input type="hidden" name="stock" value="<?php echo $liste[$i]['Stock']; ?>"
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
						<img src="<?php echo img_loader($liste[$i]['Source'],"jpg");?>" class="img-fluid" width="100px;">
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<?php echo $liste[$i]['prix'];?>

							
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<?php echo $liste[$i]['Quantite'];?>
							<input type="hidden" name="quantite" value="<?php echo $liste[$i]['Quantite'];?>">
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<?php echo $liste[$i]['total'];?>
						</div>
					  </td>
					  <td>
						<div id="bsouhait">
							<input type="submit" class="btn btn-success" value="Valider"></a>
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