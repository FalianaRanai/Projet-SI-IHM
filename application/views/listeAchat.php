<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Liste d'achat</h1>
  </div>
	<div class="row">
		<div class="col-md-10 offset-1">
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
				<?php for($i=0;$i<count($achat);$i++){?>
				<form action="Template" method="POST">
					<input type="hidden" name="modifProd" value="1">
					<tr class="light">
					  <td>
						<div id="lsouhait">
							Caisse <?php echo $this->session->userdata('idCaisse');?>
							<input type="hidden" name="idProduit" value="">
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<?php echo $nomProduit[$i]['NomProduit'];?>
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
						<img src="<?php echo img_loader($nomProduit[$i]['Source'],"jpg");?>" class="img-fluid" width="100px;">
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<?php echo $nomProduit[$i]["Prix"];?>
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<?php echo $achat[$i]["Quantite"];?>
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<?php echo $nomProduit[$i]["Prix"]*$achat[$i]["Quantite"];?>
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