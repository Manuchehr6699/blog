<?php

namespace app\controllers;

use app\models\Post;
use yii\db\Expression;

class PostController extends \yii\web\Controller
{
    public function actionAddPost()
    {

        $model = new Post();

        if (\Yii::$app->request->isPost && $model->load(\Yii::$app->request->post())) {
            if (!empty(\Yii::$app->user->id)) {
                $model->published_by = \Yii::$app->user->id;
            }
            $model->published_at = (new Expression('Now()'));
            $model->status = 1;
            if ($model->save()) {
                \Yii::$app->session->setFlash('ok', '<i class="glyphicon glyphicon-check"></i> Your post was successfully added!');

                $this->redirect(['view', 'id' => $model->id]);
            } else {
                \Yii::$app->session->setFlash('error', "Your post wasn't added. Please try again!");
                $this->redirect(['add-post']);
            }
        }


        return $this->render('add-post', [
            'model' => $model
        ]);
    }

    public function actionView($id)
    {
        $post = Post::find()->where(['id' => $id, 'status' => 1])->asArray()->one();

        return $this->render('view', ['post' => $post]);
    }


}
