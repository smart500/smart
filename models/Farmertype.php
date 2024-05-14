<?php

namespace app\models;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "farm_type".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $is_deleted
 */
class Farmertype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'farm_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 100],
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
            'is_deleted' => 'Is Deleted',
        ];
    }
    public function search()
    {
        $query = Farmertype::find();
        $query->andFilterWhere(["LIKE", "name",  $this->name]);
        return new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => [
                'id' => 'ASC'
            ]],            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
    }
    public static function getAll()
	{
			return Farmertype::find()->orderBy(["name" => "ASC"])->all();
	}
}
