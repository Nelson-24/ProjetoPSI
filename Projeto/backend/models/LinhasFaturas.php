<?php

namespace backend\models;

use common\models\Artigos;
use Yii;

/**
 * This is the model class for table "linhasfaturas".
 *
 * @property int $id
 * @property int $quantidade
 * @property float $valor
 * @property string $referencia
 * @property int $artigos_id
 *
 * @property Artigos $artigos
 * @property Faturas[] $faturas
 */
class LinhasFaturas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'linhasfaturas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantidade', 'valor', 'referencia', 'artigos_id'], 'required'],
            [['quantidade', 'artigos_id'], 'integer'],
            [['valor'], 'number'],
            [['referencia'], 'string', 'max' => 45],
            [['artigos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artigos::class, 'targetAttribute' => ['artigos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantidade' => 'Quantidade',
            'valor' => 'Valor',
            'referencia' => 'Referencia',
            'artigos_id' => 'Artigos ID',
        ];
    }

    /**
     * Gets query for [[Artigos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArtigos()
    {
        return $this->hasOne(Artigos::class, ['id' => 'artigos_id']);
    }

    /**
     * Gets query for [[Faturas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFatura()
    {
        return $this->hasOne(Faturas::className(), ['id' => 'fatura_id']);
    }
}
