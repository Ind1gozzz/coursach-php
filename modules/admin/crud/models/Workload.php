<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "workload".
 *
 * @property int $id
 * @property int $Subject_id
 * @property int $Lab
 * @property int $Lect
 * @property int $Pract
 * @property int $Hours
 * @property int $Semester
 * @property int $Lecturer_id
 *
 * @property Planandworkload[] $planandworkloads
 * @property Lecturer $lecturer
 * @property Subject $subject
 */
class Workload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workload';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Subject_id', 'Hours', 'Lecturer_id'], 'required'],
            [['Subject_id', 'Lab', 'Lect', 'Pract', 'Hours', 'Semester', 'Lecturer_id'], 'integer'],
            [['Lecturer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lecturer::className(), 'targetAttribute' => ['Lecturer_id' => 'id']],
            [['Subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['Subject_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Subject_id' => 'Subject ID',
            'Lab' => 'Lab',
            'Lect' => 'Lect',
            'Pract' => 'Pract',
            'Hours' => 'Hours',
            'Semester' => 'Semester',
            'Lecturer_id' => 'Lecturer ID',
        ];
    }

    /**
     * Gets query for [[Planandworkloads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanandworkloads()
    {
        return $this->hasMany(Planandworkload::className(), ['Workload_id' => 'id']);
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

    /**
     * Gets query for [[Subject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'Subject_id']);
    }
}
