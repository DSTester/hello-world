<?php

/* @var $this yii\web\View
 * @var $model1 app\models\Model1
 * @var $model2 app\models\Model2
 */

use yii\helpers\Html;
use yii\bootstrap\Tabs;

$this->title = 'M1';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="datenpflege-m1">
    <h1><?= Html::encode($this->title) ?></h1>
<?php
	echo Tabs::widget([
		'items' => [
			[
				'label' => 'D1-1',
				'content' => $this->render('_d1-1', ['model' => $model1]),
				'active' => true,
			],
			[
				'label' => 'D1-2',
				'content' => $this->render('_d1-2', ['model' => $model2]),
			]
		]
	]);
?>

</div>