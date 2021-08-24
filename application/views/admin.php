<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrateur</title>
    <link href=<?php echo css_loader("bootstrap.min"); ?> rel="stylesheet">
    <link href=<?php echo css_loader("dashboard"); ?> rel="stylesheet">
    <link href=<?php echo css_loader("style"); ?> rel="stylesheet">
	<link href=<?php echo css_loader("all"); ?> rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">  Administrateur</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
           <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                   CATEGORIE DE PRODUIT<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=<?php echo site_url()."Admin/AjouterCategorie";?>>
                   Ajouter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url()."Admin/SupprimerCategorie";?>">
                  Supprimer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url()."Admin/ModifierCategorie";?>">
                   Modifier
                </a>
			  </li>
             
            </ul>

            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                   PRODUITS <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url()."Admin/AjouterProduit";?>">
                   Ajouter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url()."Admin/SupprimerProduit";?>">
                   Supprimer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url()."Admin/ModifierProduit";?>">
                   Modifier
                </a>
             
            </ul>

            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                   CONSULTATION D'ACTIVITES <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                   Gestion d'utilisateur
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                   Statistiques de ventes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                   Tableau de bord
                </a>
              </li>
            </ul>

            

          </div>
        </nav>

	     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <?php 
            if(isset($view))
            {
              include($view);
            }
          ?>
       </main>
		
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
    <script src=<?php echo js_loader("popper.min"); ?>></script>
    <script src=<?php echo js_loader("bootstrap.min"); ?>></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>