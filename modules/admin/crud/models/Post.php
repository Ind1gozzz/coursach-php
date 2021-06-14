<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $Lecturer_id
 * @property string $Post
 *
 * @property Lecturer $lecturer
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Lecturer_id', 'Post'], 'required'],
            [['Lecturer_id'], 'integer'],
            [['Post'], 'string', 'max' => 30],
            [['Lecturer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lecturer::className(), 'targetAttribute' => ['Lecturer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Lecturer_id' => 'Lecturer ID',
            'Post' => 'Post',
        ];
    }

    /**
     * Gets query for [[Lecturer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLecturer()
    {
        return $this->hasOne(Lecturer::className(), ['id' => 'Lecturer_id']);
    }
}
