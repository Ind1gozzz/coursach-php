<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "speciality".
 *
 * @property int $id
 * @property string $Name
 * @property int $Department_id
 *
 * @property Grouppp[] $grouppps
 * @property Department $department
 */
class Speciality extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'speciality';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Department_id'], 'required'],
            [['Department_id'], 'integer'],
            [['Name'], 'string', 'max' => 50],
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
            'Name' => 'Name',
            'Department_id' => 'Department ID',
        ];
    }

    /**
     * Gets query for [[Grouppps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGrouppps()
    {
        return $this->hasMany(Grouppp::className(), ['Speciality_id' => 'id']);
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
}
