<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Guitars</h1>
<ul>
<?php foreach ($guitars as $guitar): ?>
    <li>
        <?= Html::encode("{$guitar->code} ({$guitar->name})") ?>:
        <?= $guitar->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>