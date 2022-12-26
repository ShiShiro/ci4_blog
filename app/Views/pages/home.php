<section> 
  <?php
  $session = \Config\Services::session();
  ?>
<?php if (isset($session->success)): ?>
  <div class= "alert alert-success text-center alert-dismissible fade show mb-0" role="0">
    <?= $session->success ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php endif; ?>
<div class="jumbotron">
<div class="container">
  <h1 class="display-4">Ci4 Blog!</h1>
  <p class="lead">Codeigniter is such a good framework</p>
  <hr class="my-4">
  <p>This is a practice project with Ci4</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
</div>
</section>

<section class="blog-section">
  <div class= "container">
  <?php  if($news): ?>
   
    <?php foreach ($news as $newsItem): ?>
      <h3><a href ="/blog/<?= $newsItem['slug'] ?>"><?= $newsItem['title'] ?></a></h3>
      <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center">There are no posts here</p>
      <?php endif; ?>
  </div>
</section>