<?php
/** @var $model \app\models\ Article */

use yii\helpers\Html;
use yii\helpers\StringHelper;
?>

<div class="mt-3">
    <h4>
        <?php echo Html::a(Html::encode($model->title), ['view', 'slug' => $model->slug]); ?>
    </h4>
    <p>
        <?php echo StringHelper::truncateWords(Html::encode($model->getEncodedBody()), 40); ?>
    </p>
    <p class="text-muted" style="text-align: right;">
        <small>
            Created At: 
            <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at); ?></b>
            By: <?php echo $model->created_by; ?>
        </small>
    </p>
    <hr>
</div>