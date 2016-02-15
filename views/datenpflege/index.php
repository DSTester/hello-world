<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Tabs;

$this->title = 'Datenpflege';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="datenpflege-index">
    <h1><?= Html::encode($this->title) ?></h1>
<?php
	echo Tabs::widget([
		'items' => [
			[
				'label' => 'M1-1',
				'content' => 'M1-1 wird geladen ...',
				'active' => true,
			],
			[
				'label' => 'M1-2',
				'content' => 'M1-2 wird geladen ...',
			]
		]
	]);
?>

</div>