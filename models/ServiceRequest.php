<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_request".
 *
 * @property int $id
 * @property int $service_id
 * @property string $application_date
 * @property int $passport_id
 * @property int $owner_id
 *
 * @property User $owner
 * @property PetPassport $passport
 * @property Service $service
 */
class ServiceRequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'application_date', 'passport_id', 'owner_id'], 'required'],
            [['service_id', 'passport_id', 'owner_id'], 'integer'],
            [['application_date'], 'safe'],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::class, 'targetAttribute' => ['service_id' => 'id']],
            [['passport_id'], 'exist', 'skipOnError' => true, 'targetClass' => PetPassport::class, 'targetAttribute' => ['passport_id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['owner_id' => 'id']],
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
            'application_date' => 'Application Date',
            'passport_id' => 'Passport ID',
            'owner_id' => 'Owner ID',
        ];
    }

    /**
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::class, ['id' => 'owner_id']);
    }

    /**
     * Gets query for [[Passport]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPassport()
    {
        return $this->hasOne(PetPassport::class, ['id' => 'passport_id']);
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
}
