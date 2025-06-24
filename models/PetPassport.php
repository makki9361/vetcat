<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pet_passport".
 *
 * @property int $id
 * @property string $appointment_date
 * @property string $data_of_birth
 * @property int $breed_id
 * @property string $color
 * @property string $gender
 * @property string|null $photo
 * @property int $owner_id
 * @property int $category_id
 *
 * @property Anylyzes[] $anylyzes
 * @property Breeds $breed
 * @property Petcategory $category
 * @property User $owner
 * @property ServiceRequest[] $serviceRequests
 */
class PetPassport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pet_passport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['appointment_date', 'data_of_birth', 'breed_id', 'color', 'gender', 'owner_id', 'category_id'], 'required'],
            [['appointment_date', 'data_of_birth'], 'safe'],
            [['breed_id', 'owner_id', 'category_id'], 'integer'],
            [['color', 'gender', 'photo'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Petcategory::class, 'targetAttribute' => ['category_id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['owner_id' => 'id']],
            [['breed_id'], 'exist', 'skipOnError' => true, 'targetClass' => Breeds::class, 'targetAttribute' => ['breed_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'appointment_date' => 'Appointment Date',
            'data_of_birth' => 'Data Of Birth',
            'breed_id' => 'Breed ID',
            'color' => 'Color',
            'gender' => 'Gender',
            'photo' => 'Photo',
            'owner_id' => 'Owner ID',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * Gets query for [[Anylyzes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnylyzes()
    {
        return $this->hasMany(Anylyzes::class, ['passport_id' => 'id']);
    }

    /**
     * Gets query for [[Breed]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBreed()
    {
        return $this->hasOne(Breeds::class, ['id' => 'breed_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Petcategory::class, ['id' => 'category_id']);
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
     * Gets query for [[ServiceRequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceRequests()
    {
        return $this->hasMany(ServiceRequest::class, ['passport_id' => 'id']);
    }
}
