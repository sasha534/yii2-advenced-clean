<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "actions".
 *
 * @property int $id
 * @property string $title
 * @property int|null $percent
 * @property int|null $level
 * @property int|null $rules
 * @property string|null $group
 * @property bool|null $active
 * @property string|null $time_active
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Actions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['percent', 'level', 'rules'], 'default', 'value' => null],
            [['percent', 'level', 'rules'], 'integer'],
            [['active'], 'boolean'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'group', 'time_active'], 'string', 'max' => 255],
            [['title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'percent' => 'Percent',
            'level' => 'Level',
            'rules' => 'Rules',
            'group' => 'Group',
            'active' => 'Active',
            'time_active' => 'Time Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ActionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActionsQuery(get_called_class());
    }
}
