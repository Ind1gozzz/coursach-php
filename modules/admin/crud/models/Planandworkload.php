<?php

namespace app\modules\admin\crud\models;

use Yii;

/**
 * This is the model class for table "planandworkload".
 *
 * @property int $Plan_id
 * @property int $Workload_id
 *
 * @property Workload $workload
 * @property Plan $plan
 */
class Planandworkload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planandworkload';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Plan_id', 'Workload_id'], 'required'],
            [['Plan_id', 'Workload_id'], 'integer'],
            [['Workload_id'], 'exist', 'skipOnError' => true, 'targetClass' => Workload::className(), 'targetAttribute' => ['Workload_id' => 'id']],
            [['Plan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plan::className(), 'targetAttribute' => ['Plan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Plan_id' => 'Plan ID',
            'Workload_id' => 'Workload ID',
        ];
    }

    /**
     * Gets query for [[Workload]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkload()
    {
        return $this->hasOne(Workload::className(), ['id' => 'Workload_id']);
    }

    /**
     * Gets query for [[Plan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlan()
    {
        return $this->hasOne(Plan::className(), ['id' => 'Plan_id']);
    }
}
