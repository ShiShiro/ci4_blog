<section>
<div class="container">
      <article class="blg-post">
    <h1><?= $post['title'] ?></h1>
    <div class="details">
        Posted on: <?= date('M d Y', strtotime($post['created_at'])) ?> by <a href="https://www. alex.com"></a><p> Alex </p>
    </div>
    <?= $post['body'] ?>

</article>
</div>
</section>






