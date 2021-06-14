<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "exammarks".
 *
 * @property int $id
 * @property int $Student_id
 * @property int $Mark
 * @property int $Exam_id
 *
 * @property Exams $exam
 * @property Student $student
 */
class Exammarks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exammarks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Student_id', 'Mark', 'Exam_id'], 'required'],
            [['Student_id', 'Mark', 'Exam_id'], 'integer'],
            [['Exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exams::className(), 'targetAttribute' => ['Exam_id' => 'id']],
            [['Student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['Student_id' => 'id']],
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
            'Mark' => 'Mark',
            'Exam_id' => 'Exam ID',
        ];
    }

    /**
     * Gets query for [[Exam]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExam()
    {
        return $this->hasOne(Exams::className(), ['id' => 'Exam_id']);
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
}
