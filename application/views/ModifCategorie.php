<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Modifier une catégorie</h1>
  </div>
	<div class="row">
		<div class="col-md-10 offset-1">
			<table class="table table-light  table-striped">
			  <thead>
				<tr>
				  <th scope="col">ID</th>
				  <th scope="col">Nom Catégorie</th>	
				  <th scope="col"></th>
				</tr>
			  </thead>	
			  <tbody>
				<?php foreach($categorie as $cat){?>
				<form action="<?php echo site_url()."Admin/TraitementModifierCategorie";?>" method="post">
					<input type="hidden" name="idCategorie" value="<?php echo $cat['IDCategorie'];?>">
					<tr class="light">
					  <td>
						<div id="lsouhait">
							<?php echo $cat['IDCategorie'];?>
						</div>
					  </td>
					  <td>
						<div id="lsouhait">
							<input type="text" value="<?php echo $cat['NomCategorie'];?>" name="nomCategorie"/>
						</div>
					  </td>
					  <td>
						<div id="bsouhait">
							<input type="submit" class="btn btn-primary" value="Modifier" />
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