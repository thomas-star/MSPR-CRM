
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>PayeTonKawa Production</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="script.js"></script>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Recherche</button>
      </form>
    </div>
  </div>
</nav>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php
$api_url = 'http://localhost/dolibarr/api/index.php/products?sortfield=t.ref&sortorder=ASC&limit=100&DOLAPIKEY=PayeTonKawaNov10';

$json_data = file_get_contents($api_url);

$response_data = json_decode($json_data);
echo "<table style='text-align:center;'>";
//echo "<tr><th>Productions</th></tr>";

	echo "<tr>";
	foreach ($response_data as $i=>$info) {
		if($i % 2 == 0){
			echo "<td>";
			//echo "<a target='_blank' href='product.php?id=".$info->id."'><div>Produit: ".$info->label;
			echo '<div class="card" style="width: 18rem;"><img src="..." class="card-img-top" alt="..."><div class="card-body">';
			echo '<h5 class="card-title">'.$info->label;
			echo '</h5><p class="card-text">'.$info->description.'</p>';
			echo '<a href="product.php?id='.$info->id.'" class="btn btn-primary">'.$info->price_ttc.'€</a></div></div>';
			//echo "<h2>$info->price_ttc</h2>";
			//echo "<br />";
			//echo "Description: ".$info->description;
			//echo "<br /> <br /></div></a>";
			echo "</td>";
		}
		else{
			echo "<td>";
			//echo "<a target='_blank' href='product.php?id=".$info->id."'><div>Produit: ".$info->label;
			echo '<div class="card" style="width: 18rem;"><img src="..." class="card-img-top" alt="..."><div class="card-body">';
			echo '<h5 class="card-title">'.$info->label;
			echo '</h5><p class="card-text">'.$info->description.'</p>';
			echo '<a href="#" class="btn btn-primary">'.$info->price_ttc.'€</a></div></div>';
			//echo "<h2>$info->price_ttc</h2>";
			//echo "<br />";
			//echo "Description: ".$info->description;
			//echo "<br /> <br /></div></a>";
			echo "</td>";
			echo "</tr>";
		}
	}
echo "</table>";
?>
</body>
</html>

