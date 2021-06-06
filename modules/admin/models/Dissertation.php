<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "dissertation".
 *
 * @property int $id
 * @property string $Theme
 * @property string $Degree
 * @property string $DateDiss
 * @property int $Lecturer_id
 *
 * @property Lecturer $lecturer
 */
class Dissertation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dissertation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Theme', 'Degree', 'DateDiss', 'Lecturer_id'], 'required'],
            [['DateDiss'], 'safe'],
            [['Lecturer_id'], 'integer'],
            [['Theme'], 'string', 'max' => 100],
            [['Degree'], 'string', 'max' => 30],
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
            'Theme' => 'Theme',
            'Degree' => 'Degree',
            'DateDiss' => 'Date Diss',
            'Lecturer_id' => 'Lecturer ID',
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
