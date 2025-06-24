<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anylyzes".
 *
 * @property int $id
 * @property int $appointment_id
 * @property int $passport_id
 * @property float $t_p
 * @property float $alb
 * @property float $bil_bin_pr
 * @property float $bil_bin_t
 * @property float $urea
 * @property float $creat_nin
 * @property float $glucose
 * @property string $date
 *
 * @property Appointment $appointment
 * @property PetPassport $passport
 */
class Anylyzes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anylyzes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'appointment_id', 'passport_id', 't_p', 'alb', 'bil_bin_pr', 'bil_bin_t', 'urea', 'creat_nin', 'glucose', 'date'], 'required'],
            [['id', 'appointment_id', 'passport_id'], 'integer'],
            [['t_p', 'alb', 'bil_bin_pr', 'bil_bin_t', 'urea', 'creat_nin', 'glucose'], 'number'],
            [['date'], 'safe'],
            [['appointment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Appointment::class, 'targetAttribute' => ['appointment_id' => 'id']],
            [['passport_id'], 'exist', 'skipOnError' => true, 'targetClass' => PetPassport::class, 'targetAttribute' => ['passport_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'appointment_id' => 'Appointment ID',
            'passport_id' => 'Passport ID',
            't_p' => 'T P',
            'alb' => 'Alb',
            'bil_bin_pr' => 'Bil Bin Pr',
            'bil_bin_t' => 'Bil Bin T',
            'urea' => 'Urea',
            'creat_nin' => 'Creat Nin',
            'glucose' => 'Glucose',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Appointment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppointment()
    {
        return $this->hasOne(Appointment::class, ['id' => 'appointment_id']);
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
}
