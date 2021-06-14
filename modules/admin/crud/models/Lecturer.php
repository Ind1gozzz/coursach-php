<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "lecturer".
 *
 * @property int $id
 * @property string $FirstName
 * @property string $LastName
 * @property string $Gender
 * @property string $BirthDate
 * @property int $Salary
 * @property int $Childs
 * @property int $Department_id
 *
 * @property Dissertation[] $dissertations
 * @property Exams[] $exams
 * @property Department $department
 * @property Post[] $posts
 * @property Thesiswork[] $thesisworks
 * @property Workload[] $workloads
 */
class Lecturer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lecturer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'Gender', 'BirthDate', 'Salary', 'Department_id'], 'required'],
            [['BirthDate'], 'safe'],
            [['Salary', 'Childs', 'Department_id'], 'integer'],
            [['FirstName', 'LastName'], 'string', 'max' => 30],
            [['Gender'], 'string', 'max' => 6],
            [['Department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['Department_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'Gender' => 'Gender',
            'BirthDate' => 'Birth Date',
            'Salary' => 'Salary',
            'Childs' => 'Childs',
            'Department_id' => 'Department ID',
        ];
    }

    /**
     * Gets query for [[Dissertations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDissertations()
    {
        return $this->hasMany(Dissertation::className(), ['Lecturer_id' => 'id']);
    }

    /**
     * Gets query for [[Exams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExams()
    {
        return $this->hasMany(Exams::className(), ['Lexturer_id' => 'id']);
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'Department_id']);
    }

    /**
     * Gets query for [[Posts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['Lecturer_id' => 'id']);
    }

    /**
     * Gets query for [[Thesisworks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getThesisworks()
    {
        return $this->hasMany(Thesiswork::className(), ['Lecturer_id' => 'id']);
    }

    /**
     * Gets query for [[Workloads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkloads()
    {
        return $this->hasMany(Workload::className(), ['Lecturer_id' => 'id']);
    }
}
