<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property string $nombre_usuario
 * @property string $password
 * @property string $email
 * @property integer $empresa_id
 *
 * The followings are the available model relations:
 * @property Presupuesto[] $presupuestos
 * @property Empresa $empresa
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_usuario, password, email, empresa_id', 'required'),
			array('empresa_id', 'numerical', 'integerOnly'=>true),
			array('nombre_usuario, password, email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre_usuario, password, email, empresa_id', 'safe', 'on'=>'search'),
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
			'presupuestos' => array(self::HAS_MANY, 'Presupuesto', 'usuario_id'),
			'empresa' => array(self::BELONGS_TO, 'Empresa', 'empresa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre_usuario' => 'Nombre Usuario',
			'password' => 'Password',
			'email' => 'Email',
			'empresa_id' => 'Empresa',
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
		$criteria->compare('nombre_usuario',$this->nombre_usuario,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('empresa_id',$this->empresa_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}