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
				'label' => 'Basisdaten',
				'items' => [
					[
						'label' => 'Artikel',
						'content' => 'Artikel werden geladen ...',
						'url' => ['http://www.hsk.de'],
						'active' => true,
					],
					[
						'label' => 'Serien',
						'content' => 'Serien werden geladen ...',
						'linkOptions' => ['data-url' => \yii\helpers\Url::to(['/ajax/serien'])],
					]
				]
			],
			[
				'label' => 'Firmendaten',
				'items' => [
				[
					'label' => 'Länder',
					'content' => 'Länder werden geladen ...',
					'url' => 'ajax/laender',
				],
				[
					'label' => 'Firmen',
					'content' => 'Firmen werden geladen ...',
					'url' => 'ajax/firmen',
				],
				[
					'label' => 'Firmendaten',
					'content' => 'Firmendaten werden geladen ...',
					'url' => 'ajax/firmendaten',
				],
				[
					'label' => 'Abwicklungen',
					'content' => 'Abwicklungsdaten werden geladen ...',
					'url' => 'ajax/abwicklungen',
				]]
			]
		]])
?>

</div>