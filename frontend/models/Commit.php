<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "commit".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $message
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Commit extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'commit';
    }

    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'message', 'topic'], 'required'],
            [['message'], 'string'],
            [['status'  ], 'integer'],
            [['name', 'email','topic'], 'string', 'max' => 255],
            [['message','name', 'topic'], 'filter', 'filter' => 'strip_tags'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic' => 'Mavzu',
            'name' => 'Ismingiz',
            'email' => 'Email',
            'phone' => 'Telefon nomer',
            'message' => 'Xabar',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verifyCode' => "To'ldiring",
        ];
    }
}
