<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property int $id
 * @property int $diseases_id
 * @property string $additions
 * @property string $treatment
 * @property string $date_of_request
 * @property string|null $date_of_recovery
 * @property int $vet_id
 * @property int $pet_id
 * @property int $owner_id
 *
 * @property Anylyzes[] $anylyzes
 * @property Diseases $diseases
 * @property Vets $vet
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['diseases_id', 'additions', 'treatment', 'date_of_request', 'vet_id', 'pet_id', 'owner_id'], 'required'],
            [['diseases_id', 'vet_id', 'pet_id', 'owner_id'], 'integer'],
            [['treatment'], 'string'],
            [['date_of_request', 'date_of_recovery'], 'safe'],
            [['additions'], 'string', 'max' => 255],
            [['vet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vets::class, 'targetAttribute' => ['vet_id' => 'id']],
            [['diseases_id'], 'exist', 'skipOnError' => true, 'targetClass' => Diseases::class, 'targetAttribute' => ['diseases_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'diseases_id' => 'Diseases ID',
            'additions' => 'Additions',
            'treatment' => 'Treatment',
            'date_of_request' => 'Date Of Request',
            'date_of_recovery' => 'Date Of Recovery',
            'vet_id' => 'Vet ID',
            'pet_id' => 'Pet ID',
            'owner_id' => 'Owner ID',
        ];
    }

    /**
     * Gets query for [[Anylyzes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnylyzes()
    {
        return $this->hasMany(Anylyzes::class, ['appointment_id' => 'id']);
    }

    /**
     * Gets query for [[Diseases]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiseases()
    {
        return $this->hasOne(Diseases::class, ['id' => 'diseases_id']);
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
