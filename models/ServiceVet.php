<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_vet".
 *
 * @property int $id
 * @property int $service_id
 * @property int $vet_id
 *
 * @property Service $service
 * @property Vets $vet
 */
class ServiceVet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_vet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'vet_id'], 'required'],
            [['service_id', 'vet_id'], 'integer'],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::class, 'targetAttribute' => ['service_id' => 'id']],
            [['vet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vets::class, 'targetAttribute' => ['vet_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_id' => 'Service ID',
            'vet_id' => 'Vet ID',
        ];
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::class, ['id' => 'service_id']);
    }

    /**
     * Gets query for [[Vet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVet()
    {
        return $this->hasOne(Vets::class, ['id' => 'vet_id']);
    }
}
