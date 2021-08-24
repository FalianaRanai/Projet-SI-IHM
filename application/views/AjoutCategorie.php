<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Ajouter une catégorie</h1>
  </div>
	<div class="input-group flex-nowrap">
		<form action="Page/traitement.php" method="POST">
			<div class="form-group">
				<h6 style="margin-bottom:20px;">Nom de la catégorie : </h6>
				<input type="text" id="insert" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="ajoutCat">
				</br>
				<button type="submit" class="btn btn-primary">Ajouter</button>
			</div>	
		</form>
	</div>
</main>