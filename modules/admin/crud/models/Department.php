<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $Name
 * @property int $Faculty_id
 *
 * @property Faculty $faculty
 * @property Lecturer[] $lecturers
 * @property Speciality[] $specialities
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Faculty_id'], 'required'],
            [['Faculty_id'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Faculty_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['Faculty_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Faculty_id' => 'Faculty ID',
        ];
    }

    /**
     * Gets query for [[Faculty]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaculty()
    {
        return $this->hasOne(Faculty::className(), ['id' => 'Faculty_id']);
    }

    /**
     * Gets query for [[Lecturers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLecturers()
    {
        return $this->hasMany(Lecturer::className(), ['Department_id' => 'id']);
    }

    /**
     * Gets query for [[Specialities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialities()
    {
        return $this->hasMany(Speciality::className(), ['Department_id' => 'id']);
    }
}
