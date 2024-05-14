<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_far".
 *
 * @property int $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property int $mobile
 * @property int $addhar
 */
class TestFar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_far';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'firstname', 'middlename', 'lastname', 'mobile', 'addhar'], 'required'],
            [['id', 'mobile', 'addhar'], 'integer'],
            [['firstname', 'middlename', 'lastname'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'mobile' => 'Mobile',
            'addhar' => 'Addhar',
        ];
    }
}
