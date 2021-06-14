<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "exams".
 *
 * @property int $id
 * @property int $Subject_id
 * @property int $Group_id
 * @property string $Date
 * @property int $Lexturer_id
 * @property int $Semestre
 *
 * @property Exammarks[] $exammarks
 * @property Subject $subject
 * @property Grouppp $group
 * @property Lecturer $lexturer
 */
class Exams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Subject_id', 'Group_id', 'Date', 'Lexturer_id', 'Semestre'], 'required'],
            [['Subject_id', 'Group_id', 'Lexturer_id', 'Semestre'], 'integer'],
            [['Date'], 'safe'],
            [['Subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['Subject_id' => 'id']],
            [['Group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Grouppp::className(), 'targetAttribute' => ['Group_id' => 'id']],
            [['Lexturer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lecturer::className(), 'targetAttribute' => ['Lexturer_id' => 'id']],
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
            'Group_id' => 'Group ID',
            'Date' => 'Date',
            'Lexturer_id' => 'Lexturer ID',
            'Semestre' => 'Semestre',
        ];
    }

    /**
     * Gets query for [[Exammarks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExammarks()
    {
        return $this->hasMany(Exammarks::className(), ['Exam_id' => 'id']);
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

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Grouppp::className(), ['id' => 'Group_id']);
    }

    /**
     * Gets query for [[Lexturer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLexturer()
    {
        return $this->hasOne(Lecturer::className(), ['id' => 'Lexturer_id']);
    }
}
