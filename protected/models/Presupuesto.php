<?php

/**
 * This is the model class for table "presupuesto".
 *
 * The followings are the available columns in table 'presupuesto':
 * @property integer $id
 * @property string $nombre_cliente
 * @property string $descripcion_inmueble
 * @property integer $tipo_credito_id
 * @property integer $usuario_id
 * @property string $precio
 * @property string $avaluo
 * @property string $credito_fovissste
 * @property string $credito_infonavit
 * @property string $credito_banco
 * @property integer $vivienda_nueva
 * @property integer $cancelacion_credito
 * @property string $traslacion_dominio
 * @property string $derechos_registro
 * @property string $certificado_gravamen
 * @property string $certificaciones
 * @property string $honorarios_fovissste
 * @property string $honorarios_cliente
 *
 * The followings are the available model relations:
 * @property Tipocredito $tipoCredito
 * @property Usuario $usuario
 */
class Presupuesto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Presupuesto the static model class
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
		return 'presupuesto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_cliente, tipo_credito_id, usuario_id, precio, avaluo', 'required'),
			array('tipo_credito_id, usuario_id, vivienda_nueva, cancelacion_credito', 'numerical', 'integerOnly'=>true),
			array('nombre_cliente, descripcion_inmueble', 'length', 'max'=>100),
			array('precio, avaluo, credito_fovissste, credito_infonavit, credito_banco, traslacion_dominio, derechos_registro, certificado_gravamen, certificaciones, honorarios_fovissste, honorarios_cliente', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre_cliente, descripcion_inmueble, tipo_credito_id, usuario_id, precio, avaluo, credito_fovissste, credito_infonavit, credito_banco, vivienda_nueva, cancelacion_credito, traslacion_dominio, derechos_registro, certificado_gravamen, certificaciones, honorarios_fovissste, honorarios_cliente', 'safe', 'on'=>'search'),
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
			'tipoCredito' => array(self::BELONGS_TO, 'Tipocredito', 'tipo_credito_id'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre_cliente' => 'Nombre Cliente',
			'descripcion_inmueble' => 'Descripcion Inmueble',
			'tipo_credito_id' => 'Tipo Credito',
			'usuario_id' => 'Usuario',
			'precio' => 'Precio',
			'avaluo' => 'Avaluo',
			'credito_fovissste' => 'Credito Fovissste',
			'credito_infonavit' => 'Credito Infonavit',
			'credito_banco' => 'Credito Banco',
			'vivienda_nueva' => 'Vivienda Nueva',
			'cancelacion_credito' => 'Cancelacion Credito',
			'traslacion_dominio' => 'Traslacion Dominio',
			'derechos_registro' => 'Derechos Registro',
			'certificado_gravamen' => 'Certificado Gravamen',
			'certificaciones' => 'Certificaciones',
			'honorarios_fovissste' => 'Honorarios Fovissste',
			'honorarios_cliente' => 'Honorarios Cliente',
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
		$criteria->compare('nombre_cliente',$this->nombre_cliente,true);
		$criteria->compare('descripcion_inmueble',$this->descripcion_inmueble,true);
		$criteria->compare('tipo_credito_id',$this->tipo_credito_id);
		$criteria->compare('usuario_id',$this->usuario_id);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('avaluo',$this->avaluo,true);
		$criteria->compare('credito_fovissste',$this->credito_fovissste,true);
		$criteria->compare('credito_infonavit',$this->credito_infonavit,true);
		$criteria->compare('credito_banco',$this->credito_banco,true);
		$criteria->compare('vivienda_nueva',$this->vivienda_nueva);
		$criteria->compare('cancelacion_credito',$this->cancelacion_credito);
		$criteria->compare('traslacion_dominio',$this->traslacion_dominio,true);
		$criteria->compare('derechos_registro',$this->derechos_registro,true);
		$criteria->compare('certificado_gravamen',$this->certificado_gravamen,true);
		$criteria->compare('certificaciones',$this->certificaciones,true);
		$criteria->compare('honorarios_fovissste',$this->honorarios_fovissste,true);
		$criteria->compare('honorarios_cliente',$this->honorarios_cliente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}