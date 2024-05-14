<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "talukas".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $distric_id
 * @property int|null $is_deleted
 */
class Talukas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'talukas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['distric_id', 'is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'distric_id' => 'Distric ID',
            'is_deleted' => 'Is Deleted',
        ];
    }
    public function search()
    {
         $query = Talukas::find();
        $query->andFilterWhere(["LIKE", "name",  $this->name]);
        if (!empty($this->distric_id)) {
            $query->andWhere(["distric_id" => $this->distric_id]);
        }
        return new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => [
                'id' => 'DESC'
            ]],            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
    }
    
    public function getdistrict()
    {
        return $this->hasOne(Districts::className(), ['id' => 'distric_id']);
    }
    public static function getTalukas()
    {  
         return ArrayHelper::map(Talukas::find()->all(), 'id', 'name');
    }

    public static function getAll()
	{
			return Talukas::find()->orderBy(["name" => "ASC"])->all();
	}  
    public static function getTalukalist($district_id = '')
    {
        $query = Talukas::find();
        if (!empty($district_id)) {
            $query->andWhere(['distric_id' => $district_id]);
        }
        return ArrayHelper::map($query->all(), 'id', 'name');
    }
}
