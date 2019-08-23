<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 23.08.2019
 * Time: 22:25
 */
$this->title = $post['title'];
?>

<div class="row">
    <div class="col-lg-12">
        <p><a class="btn btn-default" href="/site/index"><< Go to Back</a></p>
        <?php if(Yii::$app->session->hasFlash('ok')): ?>
            <div class="col-md-12 col-xs-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <?= \Yii::$app->session->get('ok'); ?>
                </div>
            </div>
        <?php endif; ?>
        <h2><?= $post['title'] ?></h2>
        <p style="text-align: justify; font-size: 18px">
            <?= $post['content'] ?>
        </p>
    </div>
</div>
