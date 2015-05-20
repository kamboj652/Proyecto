<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Usuarios</h1>
<ul>
<?php foreach($usuarios as $usuario): ?>
    <li>
        <?= Html::encode("{$usuario->nombre} ({$usuario->nick})") ?>:
        <?= $usuario->direccion ?>
    </li>

<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>