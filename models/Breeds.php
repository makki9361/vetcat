<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "breeds".
 *
 * @property int $id
 * @property string $name
 * @property int $vid_id
 *
 * @property PetPassport[] $petPassports
 * @property Petcategory $vid
 */
class Breeds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'breeds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'vid_id'], 'required'],
            [['vid_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['vid_id'], 'exist', 'skipOnError' => true, 'targetClass' => Petcategory::class, 'targetAttribute' => ['vid_id' => 'id']],
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
            'vid_id' => 'Vid ID',
        ];
    }

    /**
     * Gets query for [[PetPassports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetPassports()
    {
        return $this->hasMany(PetPassport::class, ['breed_id' => 'id']);
    }

    /**
     * Gets query for [[Vid]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVid()
    {
        return $this->hasOne(Petcategory::class, ['id' => 'vid_id']);
    }
}
