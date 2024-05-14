<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "cities".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $taluka_id
 * @property int|null $distric_id
 * @property int|null $is_deleted
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taluka_id', 'distric_id', 'is_deleted'], 'integer'],
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
            'taluka_id' => 'Taluka ID',
            'distric_id' => 'Distric ID',
            'is_deleted' => 'Is Deleted',
        ];
    }
    public function search()
    {
         $query = Cities::find();
        $query->andFilterWhere(["LIKE", "name",  $this->name]);
        if (!empty($this->taluka_id)) {
            $query->andWhere(["taluka_id" => $this->taluka_id]);
        }
        if (!empty($this->distric_id)) {
            $query->andWhere(["distric_id" => $this->distric_id]);
        }
        return new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => [
                'id' => 'DESC'
            ]],   
            'pagination' => [
                'pageSize' => 40,
                
            ],
            
        ]);
    }
    public static function getTalukaslist($distric_id = '')
    {  
        if(!empty($distric_id)){
            $query = Talukas::find()->andWhere(['distric_id' => $distric_id])->all();
           return $query;
        }
         return ArrayHelper::map(Talukas::find()->all(), 'id', 'name');
    }
    
    public function getCity($taluka_id)
    {
        return ArrayHelper::map(Cities::find()->andWhere(['taluka_id' => $taluka_id])->all(),'id','name');
    }

    public function getDistricts()
    {
        return ArrayHelper::map(Districts::find()->all(),'id','name');
    }

    public function getTalukas()
    {
        return ArrayHelper::map(Districts::find()->all(),'id','name');
    }

    public function getdistrict()
    {
        return $this->hasOne(Districts::className(), ['id' => 'distric_id']);
    }

    public function gettaluka()
    {
        return $this->hasOne(Talukas::className(), ['id' => 'taluka_id']);
    }

    public static function getAll()
	{
			return Cities::find()->orderBy(["name" => "ASC"])->all();
	}

    public static function getcitylist($taluka_id = '')
    {   
        
        $query = Cities::find();
        if (!empty($taluka_id) ) {
            $query->andWhere(['taluka_id' => $taluka_id]);
        }
       
        return ArrayHelper::map($query->all(), 'id', 'name');
    }
    
}