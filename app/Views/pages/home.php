<section> 
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
      <h3><?= $newsItem['title'] ?></h3>
      <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center">There are no posts here</p>
      <?php endif; ?>
  </div>
</section>