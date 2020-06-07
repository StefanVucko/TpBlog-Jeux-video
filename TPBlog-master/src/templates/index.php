<!-- Page d'accueil -->
<div class="container-fluid row w-100 m-0 p-0" >


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/theme/ps4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/theme/pc.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/theme/console.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Liste des articles du blog -->
<div id="articles" class="container mt-5">
    <h2 class="text-center text-success">- Articles -</h2>
    <div class="row row-cols-1 row-cols-md-2">
        <?php foreach($posts as $post): ?>
            <div class="col-md-6 p-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/articles/<?=$post["Image"]?>" alt="image de l\'article">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($post['Title']) ?></h5>
                        <!-- Seul un extrait de l'article du blog est affiché -->
                        <p class="card-text"><?= substr(htmlspecialchars($post['Contents']), 0, 100) ?>&nbsp;[...]</p>
                        <small>
                            Rédigé par <?= htmlspecialchars($post['FirstName']) ?> <?= htmlspecialchars($post['LastName']) ?>
                            le <?= htmlspecialchars($post['CreationTimestamp']) ?>
                        </small> <br />                
                        <!-- Lien vers article de blog détaillé avec les commentaires -->
                        <div class="text-center p-3">
                            <a href="show_post.php?id=<?= intval($post['Id']) ?>" class="btn btn-dark text-success">Consulter l'article</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>   
    </div>
</div>