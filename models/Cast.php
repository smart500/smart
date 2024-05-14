<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cast".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $is_deleted
 */
class Cast extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cast';
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


    public static function getAll()
	{
			return Cast::find()->orderBy(["name" => "ASC"])->all();
	}
}
