<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "grouppp".
 *
 * @property int $id
 * @property string $Name
 * @property int $Speciality_id
 * @property int $Course
 *
 * @property Exams[] $exams
 * @property Speciality $speciality
 * @property Plan[] $plans
 * @property Student[] $students
 */
class Grouppp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grouppp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Speciality_id', 'Course'], 'required'],
            [['Speciality_id', 'Course'], 'integer'],
            [['Name'], 'string', 'max' => 20],
            [['Speciality_id'], 'exist', 'skipOnError' => true, 'targetClass' => Speciality::className(), 'targetAttribute' => ['Speciality_id' => 'id']],
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
            'Speciality_id' => 'Speciality ID',
            'Course' => 'Course',
        ];
    }

    /**
     * Gets query for [[Exams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExams()
    {
        return $this->hasMany(Exams::className(), ['Group_id' => 'id']);
    }

    /**
     * Gets query for [[Speciality]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpeciality()
    {
        return $this->hasOne(Speciality::className(), ['id' => 'Speciality_id']);
    }

    /**
     * Gets query for [[Plans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['Group_id' => 'id']);
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['Group_id' => 'id']);
    }
}
