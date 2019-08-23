<?php
/* @var $this yii\web\View */

$this->title = 'Add Post';




echo $this->render('_form', [
    'model' => $model
]);

?>
<?php if (\Yii::$app->session->hasFlash('error')): ?>
    <div class="col-md-12 col-xs-12">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->get('error'); ?>
        </div>
    </div>
<?php endif; ?>