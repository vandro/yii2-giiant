<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace tests\models;

/**
 * This is the base-model class for table "country".
 *
 * @property integer $country_id
 * @property string $country
 * @property string $last_update
 *
 * @property \app\modules\sakila\models\City[] $cities
 * @property string $aliasModel
 */
abstract class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }
}
