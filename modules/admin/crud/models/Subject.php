<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property int $id
 * @property string $Name
 * @property int $Hours
 *
 * @property Exams[] $exams
 * @property Workload[] $workloads
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Hours'], 'required'],
            [['Hours'], 'integer'],
            [['Name'], 'string', 'max' => 50],
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
            'Hours' => 'Hours',
        ];
    }

    /**
     * Gets query for [[Exams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExams()
    {
        return $this->hasMany(Exams::className(), ['Subject_id' => 'id']);
    }

    /**
     * Gets query for [[Workloads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkloads()
    {
        return $this->hasMany(Workload::className(), ['Subject_id' => 'id']);
    }
}
