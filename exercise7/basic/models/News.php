<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $user_id
 * @property string $name
 * @property string $nickname
 * @property string $address
 * @property string $email
 * @property string $website
 * @property string $comment
 * @property string $gender
 * @property string $cellphone
 * @property integer $slug
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nickname', 'address', 'email', 'website', 'comment', 'gender', 'cellphone', 'slug'], 'required'],
            [['slug'], 'integer'],
            [['name', 'nickname', 'address', 'website', 'comment', 'cellphone'], 'string', 'max' => 25],
            [['email', 'gender'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'name' => 'Name',
            'nickname' => 'Nickname',
            'address' => 'Address',
            'email' => 'Email',
            'website' => 'Website',
            'comment' => 'Comment',
            'gender' => 'Gender',
            'cellphone' => 'Cellphone',
            'slug' => 'Slug',
        ];
    }
}
