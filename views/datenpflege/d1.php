<?php

/* @var $this yii\web\View
 * @var $model1 app\models\Modelt1
 * @var $model2 app\models\Modelt2
 */

use yii\helpers\Html;
use yii\bootstrap\Tabs;

$this->title = 'D1';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="datenpflege-d1">
    <h1><?= Html::encode($this->title) ?></h1>
<?php
	echo Tabs::widget([
		'items' => [
			[
				'label' => 'D1-1',
				'content' => $this->render('_d1-1', ['model' => $modelt1]),
				'active' => true,
			],
			[
				'label' => 'D1-2',
				'content' => $this->render('_d1-2', ['model' => $modelt2]),
			]
		]
	]);
?>

</div>