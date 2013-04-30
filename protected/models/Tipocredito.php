<?php

/**
 * This is the model class for table "tipocredito".
 *
 * The followings are the available columns in table 'tipocredito':
 * @property integer $id
 * @property string $tipo_credito
 *
 * The followings are the available model relations:
 * @property Presupuesto[] $presupuestos
 */
class Tipocredito extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Tipocredito the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipocredito';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_credito', 'required'),
			array('tipo_credito', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipo_credito', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'presupuestos' => array(self::HAS_MANY, 'Presupuesto', 'tipo_credito_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo_credito' => 'Tipo Credito',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tipo_credito',$this->tipo_credito,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}