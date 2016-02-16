<?php
namespace app\models\db;

use \yii\db\ActiveRecord;

class Modelt1 extends ActiveRecord
{
	public function attributeLabels()
    {
        return [
            'id' => 'ID',
            't3id' => 'Tabelle 3',
			'modelt3' => 'Tabelle 3',
            'bez' => 'Bezeichnung',
            'bool1' => 'Ja/Nein',
			'int1' => 'Wert'
        ];
    }

	public function getModelt3()
	{
		return $this->hasOne(Modelt3::className(), ['id' => 't3id']);
	}

	public function rules()
    {
        return [
            [['id', 't3id', 'int1'], 'integer'],
            [['t3id', 'bez', 'bool1', 'int1'], 'required'],
            [['t3id', 'bez'], 'safe'],
            [['bez'], 'string', 'max' => 250],
        ];
    }

	public static function tableName() {
        return 'modelt1';
    }
}
?>