<?php

/* @var $this yii\web\View
 * //@var $model app\models\db\Modelt1
 * @var $searchModel app\models\search\Modelt1Search
 * @var $dataProvider yii\data\ActiveDataProvider
 */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\db\Modelt3;

$this->title = 'D2';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="datenpflege-d2">
    <h1><?= Html::encode($this->title) ?></h1>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
	'columns' => [
		'id',
		'bez',
		't3id' => [
			'header' => 'Tabelle 3',
			'value' => function ($data) {
				return $data->modelt3->text1;
            },
			'filter' => Html::activeDropDownList($searchModel, 't3id', ArrayHelper::map(Modelt3::find()->asArray()->all(), 'id', 'text1'),['class'=>'form-control','prompt' => 'bitte auswählen']),
		],
		'bool1' => [
			'header' => 'Ja/Nein',
			'value' => function ($data) {
				if($data->bool1)
					return "Ja";
				else
					return "Nein";
            },
			'filter' => Html::activeDropDownList($searchModel, 'bool1', [""=>"", "1"=>"Ja", "0"=>"Nein"]),
		],
		'int1',
	]
]);
?>

</div>