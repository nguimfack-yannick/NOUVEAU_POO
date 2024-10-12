<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SCRIPTS . '/css/app.css' ?>">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cour/PHP/NOUVEAU_POO/">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cour/PHP/NOUVEAU_POO/posts">Les derniers articles</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <?=$content?>
    </div>



</body>
</html>