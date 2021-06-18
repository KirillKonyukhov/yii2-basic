<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "dolgnost".
 *
 * @property int $id_dolgnost
 * @property string|null $name_dolgnosti
 * @property string|null $opisanie_dolgnosti
 *
 * @property Sotrudnik[] $sotrudniks
 */
class Dolgnost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dolgnost';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_dolgnosti', 'opisanie_dolgnosti'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dolgnost' => 'ID',
            'name_dolgnosti' => 'Должность',
            'opisanie_dolgnosti' => 'Описание',
        ];
    }

    /**
     * Gets query for [[Sotrudniks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSotrudniks()
    {
        return $this->hasMany(Sotrudnik::className(), ['id_dolgnost' => 'id_dolgnost']);
    }
}
