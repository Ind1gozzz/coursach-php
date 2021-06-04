<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $FirstName
 * @property string $LastName
 * @property string|null $Gender
 * @property string|null $BirthDate
 * @property int $Group_id
 * @property int|null $Childs
 * @property int|null $Stipend
 *
 * @property Exammarks[] $exammarks
 * @property Grouppp $group
 * @property Thesiswork[] $thesisworks
 */

class Student extends \yii\db\ActiveRecord
{
    public $Faculty_id;
    public $genderrr;
    public $StudAge;
    public $stip;
    public $HasChilds;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'Group_id'], 'required'],
            [['Gender'], 'string'],
            [['BirthDate'], 'safe'],
            [['StudAge'], 'safe'],
            [['Group_id', 'Childs', 'Stipend', 'Faculty_id'], 'integer'],
            [['FirstName', 'LastName'], 'string', 'max' => 30],
            [['Group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Grouppp::className(), 'targetAttribute' => ['Group_id' => 'id']],
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
            'Group_id' => 'Grouppp',
            'Childs' => 'Childs',
            'Stipend' => 'Stipend',
            'Faculty' => 'Faculty',
        ];
    }

    /**
     * Gets query for [[Exammarks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExammarks()
    {
        return $this->hasMany(Exammarks::className(), ['Student_id' => 'id']);
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
     * Gets query for [[Thesisworks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getThesisworks()
    {
        return $this->hasMany(Thesiswork::className(), ['Student_id' => 'id']);
    }

    public function getGrouppp()
    {
        return $this -> group -> Name;
    }

    public function getFaculty()
    {
        return $this -> group -> speciality -> department -> faculty -> Name;
    }
}
