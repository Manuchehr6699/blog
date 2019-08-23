<?php

/* @var $this yii\web\View */

$this->title = 'Blog Site';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to our blog!</h1>
        <a class="btn btn-lg btn-info" href="/post/add-post"><i class="glyphicon glyphicon-plus"></i> Add new Post</a>
    </div>

    <div class="body-content">
        <?php foreach ($posts as $post): ?>
        <div class="row">
            <div class="col-lg-12">
                <h2><?= $post->title ?></h2>
                <p><i class="glyphicon glyphicon-time"></i> <?= $post['published_at'] ?></p>
                <p><?= mb_substr($post->content, 0, 400).'...' ?></p>

                <p><a class="btn btn-default" href="/post/view?id=<?= $post->id ?>">Read More &raquo;</a></p>
            </div>
        </div>
        <?php endforeach; ?>

        <?php echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
        ])
        ?>
    </div>
</div>