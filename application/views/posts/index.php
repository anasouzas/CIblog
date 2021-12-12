<h2><?=$title?></h2>

<?php foreach($posts as $post): ?>

    <h3><?=$post['tp_title']?></h3>
    <small class = "post-date">Posted on: <?=$post['tp_created_at']?></small>
    <p><?=$post['tp_body']?></p>
    <p><a class = "btn btn-default" href = "<?=site_url('/posts/'.$post['tp_slug']);?>">Read More...</a></p>

<?php endforeach; ?>