<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property int $id
 * @property int $Group_id
 *
 * @property Grouppp $group
 * @property Planandworkload[] $planandworkloads
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Group_id'], 'required'],
            [['Group_id'], 'integer'],
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
            'Group_id' => 'Group ID',
        ];
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
     * Gets query for [[Planandworkloads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanandworkloads()
    {
        return $this->hasMany(Planandworkload::className(), ['Plan_id' => 'id']);
    }
}
