<?php

/**
 * This is the model class for table "funcionario_pr".
 *
 * The followings are the available columns in table 'funcionario_pr':
 * @property integer $cedula_id_PR
 * @property string $nombre_PR
 * @property string $apellido1_PR
 * @property string $apellido2_PR
 * @property string $fech_nacimiento_PR
 * @property string $sexo_PR
 * @property string $cod_iniciales_PR
 * @property string $telefono1_PR
 * @property string $telefono2_PR
 * @property string $email_PR
 * @property string $direccion_PR
 * @property string $fech_ingreso_PR
 * @property string $profesion
 * @property string $nivel_asignado
 * @property string $estado_PR
 * @property string $nacionalidad_PR
 *
 * The followings are the available model relations:
 * @property ModuloPlantilla[] $moduloPlantillas
 */
class FuncionarioPr extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funcionario_pr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_id_PR, nombre_PR, apellido1_PR, apellido2_PR, fech_nacimiento_PR, sexo_PR, cod_iniciales_PR, direccion_PR, fech_ingreso_PR, profesion, estado_PR, nacionalidad_PR', 'required'),
			array('cedula_id_PR', 'numerical', 'integerOnly'=>true),
			array('nombre_PR, profesion, nacionalidad_PR', 'length', 'max'=>25),
			array('apellido1_PR, apellido2_PR', 'length', 'max'=>15),
			array('sexo_PR, nivel_asignado', 'length', 'max'=>10),
			array('cod_iniciales_PR, estado_PR', 'length', 'max'=>8),
			array('telefono1_PR, telefono2_PR', 'length', 'max'=>11),
			array('email_PR', 'length', 'max'=>50),
			array('direccion_PR', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula_id_PR, nombre_PR, apellido1_PR, apellido2_PR, fech_nacimiento_PR, sexo_PR, cod_iniciales_PR, telefono1_PR, telefono2_PR, email_PR, direccion_PR, fech_ingreso_PR, profesion, nivel_asignado, estado_PR, nacionalidad_PR', 'safe', 'on'=>'search'),
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
			'moduloPlantillas' => array(self::HAS_MANY, 'ModuloPlantilla', 'cedula_id_PR'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula_id_PR' => 'Cedula Id Pr',
			'nombre_PR' => 'Nombre Pr',
			'apellido1_PR' => 'Apellido1 Pr',
			'apellido2_PR' => 'Apellido2 Pr',
			'fech_nacimiento_PR' => 'Fech Nacimiento Pr',
			'sexo_PR' => 'Sexo Pr',
			'cod_iniciales_PR' => 'Cod Iniciales Pr',
			'telefono1_PR' => 'Telefono1 Pr',
			'telefono2_PR' => 'Telefono2 Pr',
			'email_PR' => 'Email Pr',
			'direccion_PR' => 'Direccion Pr',
			'fech_ingreso_PR' => 'Fech Ingreso Pr',
			'profesion' => 'Profesion',
			'nivel_asignado' => 'Nivel Asignado',
			'estado_PR' => 'Estado Pr',
			'nacionalidad_PR' => 'Nacionalidad Pr',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cedula_id_PR',$this->cedula_id_PR);
		$criteria->compare('nombre_PR',$this->nombre_PR,true);
		$criteria->compare('apellido1_PR',$this->apellido1_PR,true);
		$criteria->compare('apellido2_PR',$this->apellido2_PR,true);
		$criteria->compare('fech_nacimiento_PR',$this->fech_nacimiento_PR,true);
		$criteria->compare('sexo_PR',$this->sexo_PR,true);
		$criteria->compare('cod_iniciales_PR',$this->cod_iniciales_PR,true);
		$criteria->compare('telefono1_PR',$this->telefono1_PR,true);
		$criteria->compare('telefono2_PR',$this->telefono2_PR,true);
		$criteria->compare('email_PR',$this->email_PR,true);
		$criteria->compare('direccion_PR',$this->direccion_PR,true);
		$criteria->compare('fech_ingreso_PR',$this->fech_ingreso_PR,true);
		$criteria->compare('profesion',$this->profesion,true);
		$criteria->compare('nivel_asignado',$this->nivel_asignado,true);
		$criteria->compare('estado_PR',$this->estado_PR,true);
		$criteria->compare('nacionalidad_PR',$this->nacionalidad_PR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FuncionarioPr the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
