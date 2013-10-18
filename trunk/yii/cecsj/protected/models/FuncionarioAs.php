<?php

/**
 * This is the model class for table "funcionario_as".
 *
 * The followings are the available columns in table 'funcionario_as':
 * @property integer $cedula_id_AS
 * @property string $nombre_AS
 * @property string $apellido1_AS
 * @property string $apellido2_AS
 * @property string $fech_nacimiento_AS
 * @property string $genero_AS
 * @property string $cod_iniciales_AS
 * @property string $telefono1_AS
 * @property string $telefono2_AS
 * @property string $email_AS
 * @property string $direccion_AS
 * @property string $tipo_funcionario_AS
 * @property string $fech_ingreso_AS
 * @property string $estado_AS
 * @property string $nacionalidad_AS
 */
class FuncionarioAs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funcionario_as';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_id_AS, nombre_AS, apellido1_AS, apellido2_AS, fech_nacimiento_AS, genero_AS, cod_iniciales_AS, direccion_AS, tipo_funcionario_AS, fech_ingreso_AS, estado_AS, nacionalidad_AS', 'required'),
			array('cedula_id_AS', 'numerical', 'integerOnly'=>true),
			array('nombre_AS, nacionalidad_AS', 'length', 'max'=>25),
			array('apellido1_AS, apellido2_AS', 'length', 'max'=>15),
			array('genero_AS, tipo_funcionario_AS', 'length', 'max'=>10),
			array('cod_iniciales_AS, estado_AS', 'length', 'max'=>8),
			array('telefono1_AS, telefono2_AS', 'length', 'max'=>11),
			array('email_AS', 'length', 'max'=>50),
			array('direccion_AS', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula_id_AS, nombre_AS, apellido1_AS, apellido2_AS, fech_nacimiento_AS, genero_AS, cod_iniciales_AS, telefono1_AS, telefono2_AS, email_AS, direccion_AS, tipo_funcionario_AS, fech_ingreso_AS, estado_AS, nacionalidad_AS', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula_id_AS' => 'Cedula Id As',
			'nombre_AS' => 'Nombre As',
			'apellido1_AS' => 'Apellido1 As',
			'apellido2_AS' => 'Apellido2 As',
			'fech_nacimiento_AS' => 'Fech Nacimiento As',
			'genero_AS' => 'Genero As',
			'cod_iniciales_AS' => 'Cod Iniciales As',
			'telefono1_AS' => 'Telefono1 As',
			'telefono2_AS' => 'Telefono2 As',
			'email_AS' => 'Email As',
			'direccion_AS' => 'Direccion As',
			'tipo_funcionario_AS' => 'Tipo Funcionario As',
			'fech_ingreso_AS' => 'Fech Ingreso As',
			'estado_AS' => 'Estado As',
			'nacionalidad_AS' => 'Nacionalidad As',
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

		$criteria->compare('cedula_id_AS',$this->cedula_id_AS);
		$criteria->compare('nombre_AS',$this->nombre_AS,true);
		$criteria->compare('apellido1_AS',$this->apellido1_AS,true);
		$criteria->compare('apellido2_AS',$this->apellido2_AS,true);
		$criteria->compare('fech_nacimiento_AS',$this->fech_nacimiento_AS,true);
		$criteria->compare('genero_AS',$this->genero_AS,true);
		$criteria->compare('cod_iniciales_AS',$this->cod_iniciales_AS,true);
		$criteria->compare('telefono1_AS',$this->telefono1_AS,true);
		$criteria->compare('telefono2_AS',$this->telefono2_AS,true);
		$criteria->compare('email_AS',$this->email_AS,true);
		$criteria->compare('direccion_AS',$this->direccion_AS,true);
		$criteria->compare('tipo_funcionario_AS',$this->tipo_funcionario_AS,true);
		$criteria->compare('fech_ingreso_AS',$this->fech_ingreso_AS,true);
		$criteria->compare('estado_AS',$this->estado_AS,true);
		$criteria->compare('nacionalidad_AS',$this->nacionalidad_AS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FuncionarioAs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
