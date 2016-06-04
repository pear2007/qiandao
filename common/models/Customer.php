<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $username
 * @property string $phone
 * @property string $mannger
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'phone', 'mannger'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'phone', 'mannger'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['phone'], 'unique'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mannger' => Yii::t('app','客服经理'),
            'username' => Yii::t('app', 'Username'),
            'phone' => Yii::t('app', 'Phone'),

            'status' =>  Yii::t('app','Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' =>  Yii::t('app','Updated At'),
        ];
    }


    public  function  beforeSave($insert) {

        if(parent::beforeSave($insert)){
//            $this->auth_key = Yii::$app->user->identity->username;
            if($insert){
                $this->created_at=time();
                $this->updated_at=time();
            }
            else
                $this->updated_at=time();
            return   TRUE;
        }  else
            return  FALSE;


    }
}
