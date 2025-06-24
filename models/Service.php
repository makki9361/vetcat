<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $category_id
 *
 * @property Servicecategory $category
 * @property ServiceRequest[] $serviceRequests
 * @property ServiceVet[] $serviceVets
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'category_id'], 'required'],
            [['category_id'], 'integer'],
            [['name', 'price'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Servicecategory::class, 'targetAttribute' => ['category_id' => 'id']],
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
            'price' => 'Price',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Servicecategory::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[ServiceRequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceRequests()
    {
        return $this->hasMany(ServiceRequest::class, ['service_id' => 'id']);
    }

    /**
     * Gets query for [[ServiceVets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceVets()
    {
        return $this->hasMany(ServiceVet::class, ['service_id' => 'id']);
    }
}
