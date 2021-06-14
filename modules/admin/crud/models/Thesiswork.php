<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "thesiswork".
 *
 * @property int $id
 * @property int $Student_id
 * @property string $Theme
 * @property int $Lecturer_id
 *
 * @property Student $student
 * @property Lecturer $lecturer
 */
class Thesiswork extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thesiswork';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Student_id', 'Theme', 'Lecturer_id'], 'required'],
            [['Student_id', 'Lecturer_id'], 'integer'],
            [['Theme'], 'string', 'max' => 50],
            [['Student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['Student_id' => 'id']],
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
            'Student_id' => 'Student ID',
            'Theme' => 'Theme',
            'Lecturer_id' => 'Lecturer ID',
        ];
    }

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'Student_id']);
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
