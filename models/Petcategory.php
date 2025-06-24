<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "petcategory".
 *
 * @property int $id
 * @property string $name
 *
 * @property Breeds[] $breeds
 * @property PetPassport[] $petPassports
 */
class Petcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Breeds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBreeds()
    {
        return $this->hasMany(Breeds::class, ['vid_id' => 'id']);
    }

    /**
     * Gets query for [[PetPassports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetPassports()
    {
        return $this->hasMany(PetPassport::class, ['category_id' => 'id']);
    }
}
