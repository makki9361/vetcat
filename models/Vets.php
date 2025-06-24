<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vets".
 *
 * @property int $id
 * @property string $first_name
 * @property string $second_name
 * @property string $last_name
 * @property int $post_id
 * @property string $image
 *
 * @property Appointment[] $appointments
 * @property Post $post
 * @property ServiceVet[] $serviceVets
 */
class Vets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'second_name', 'last_name', 'post_id', 'image'], 'required'],
            [['post_id'], 'integer'],
            [['first_name', 'second_name', 'last_name', 'image'], 'string', 'max' => 255],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::class, 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'second_name' => 'Second Name',
            'last_name' => 'Last Name',
            'post_id' => 'Post ID',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[Appointments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointment::class, ['vet_id' => 'id']);
    }

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }

    /**
     * Gets query for [[ServiceVets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceVets()
    {
        return $this->hasMany(ServiceVet::class, ['vet_id' => 'id']);
    }

    public function getSearchResult($search, $page) {
        $search = $this->cleanSearchString($search);
        if (empty($search)) {
            return [null, null];
        }

        // пробуем извлечь данные из кеша
        $key = 'search-'.md5($search).'-page-'.$page;
        $data = Yii::$app->cache->get($key);

        if ($data === false) {
            // данных нет в кеше, получаем их заново
            $query = self::find()->where(['like', 'name', $search]);
            // постраничная навигация
            $pages = new Pagination([
                'totalCount' => $query->count(),
                'pageSize' => Yii::$app->params['pageSize'],
                'forcePageParam' => false,
                'pageSizeParam' => false
            ]);
            $products = $query
                ->offset($pages->offset)
                ->limit($pages->limit)
                ->asArray()
                ->all();
            // сохраняем полученные данные в кеше
            $data = [$products, $pages];
            Yii::$app->cache->set($key, $data);
        }

        return $data;
    }

    /**
     * Вспомогательная функция, очищает строку поискового запроса с сайта
     * от всякого мусора
     */
    protected function cleanSearchString($search) {
        $search = iconv_substr($search, 0, 64);
        // удаляем все, кроме букв и цифр
        $search = preg_replace('#[^0-9a-zA-ZА-Яа-яёЁ]#u', ' ', $search);
        // сжимаем двойные пробелы
        $search = preg_replace('#\s+#u', ' ', $search);
        $search = trim($search);
        return $search;
    }
}
