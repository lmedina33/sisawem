<?php

/**
 * This is the model class for table "estudiante_r".
 *
 * The followings are the available columns in table 'estudiante_r':
 * @property integer $cedula_id_ER
 * @property string $nombre_ER
 * @property string $apellido1_ER
 * @property string $apellido2_ER
 * @property string $fech_nacimiento_ER
 * @property string $genero_ER
 * @property string $cod_iniciales_ER
 * @property string $telefono_ER
 * @property string $email_ER
 * @property string $direccion_ER
 * @property string $fech_ingreso_ER
 * @property string $nombre_encargado_ER
 * @property string $telefono2_ER
 * @property integer $pago_mensual_ER
 * @property string $becado_ER
 * @property string $nacionalidad_ER
 * @property integer $id_RE
 *
 * The followings are the available model relations:
 * @property RegistroEstudiante $idRE
 * @property HistorialAcademico[] $historialAcademicos
 * @property PlantillaConsentrados[] $plantillaConsentradoses
 */
class EstudianteR extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estudiante_r';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_id_ER, nombre_ER, apellido1_ER, apellido2_ER, fech_nacimiento_ER, genero_ER, cod_iniciales_ER, telefono_ER, email_ER, direccion_ER, fech_ingreso_ER, nombre_encargado_ER, telefono2_ER, pago_mensual_ER, becado_ER, nacionalidad_ER, id_RE', 'required'),
			array('cedula_id_ER, pago_mensual_ER, id_RE', 'numerical', 'integerOnly'=>true),
			array('nombre_ER, nacionalidad_ER', 'length', 'max'=>25),
			array('apellido1_ER, apellido2_ER', 'length', 'max'=>15),
			array('genero_ER', 'length', 'max'=>10),
			array('cod_iniciales_ER', 'length', 'max'=>8),
			array('telefono_ER, telefono2_ER', 'length', 'max'=>11),
			array('email_ER, nombre_encargado_ER', 'length', 'max'=>50),
			array('direccion_ER', 'length', 'max'=>150),
			array('becado_ER', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula_id_ER, nombre_ER, apellido1_ER, apellido2_ER, fech_nacimiento_ER, genero_ER, cod_iniciales_ER, telefono_ER, email_ER, direccion_ER, fech_ingreso_ER, nombre_encargado_ER, telefono2_ER, pago_mensual_ER, becado_ER, nacionalidad_ER, id_RE', 'safe', 'on'=>'search'),
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
			'idRE' => array(self::BELONGS_TO, 'RegistroEstudiante', 'id_RE'),
			'historialAcademicos' => array(self::HAS_MANY, 'HistorialAcademico', 'cedula_id_ER'),
			'plantillaConsentradoses' => array(self::HAS_MANY, 'PlantillaConsentrados', 'cedula_id_ER'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula_id_ER' => 'Cedula Id Er',
			'nombre_ER' => 'Nombre Er',
			'apellido1_ER' => 'Apellido1 Er',
			'apellido2_ER' => 'Apellido2 Er',
			'fech_nacimiento_ER' => 'Fech Nacimiento Er',
			'genero_ER' => 'Genero Er',
			'cod_iniciales_ER' => 'Cod Iniciales Er',
			'telefono_ER' => 'Telefono Er',
			'email_ER' => 'Email Er',
			'direccion_ER' => 'Direccion Er',
			'fech_ingreso_ER' => 'Fech Ingreso Er',
			'nombre_encargado_ER' => 'Nombre Encargado Er',
			'telefono2_ER' => 'Telefono2 Er',
			'pago_mensual_ER' => 'Pago Mensual Er',
			'becado_ER' => 'Becado Er',
			'nacionalidad_ER' => 'Nacionalidad Er',
			'id_RE' => 'Id Re',
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

		$criteria->compare('cedula_id_ER',$this->cedula_id_ER);
		$criteria->compare('nombre_ER',$this->nombre_ER,true);
		$criteria->compare('apellido1_ER',$this->apellido1_ER,true);
		$criteria->compare('apellido2_ER',$this->apellido2_ER,true);
		$criteria->compare('fech_nacimiento_ER',$this->fech_nacimiento_ER,true);
		$criteria->compare('genero_ER',$this->genero_ER,true);
		$criteria->compare('cod_iniciales_ER',$this->cod_iniciales_ER,true);
		$criteria->compare('telefono_ER',$this->telefono_ER,true);
		$criteria->compare('email_ER',$this->email_ER,true);
		$criteria->compare('direccion_ER',$this->direccion_ER,true);
		$criteria->compare('fech_ingreso_ER',$this->fech_ingreso_ER,true);
		$criteria->compare('nombre_encargado_ER',$this->nombre_encargado_ER,true);
		$criteria->compare('telefono2_ER',$this->telefono2_ER,true);
		$criteria->compare('pago_mensual_ER',$this->pago_mensual_ER);
		$criteria->compare('becado_ER',$this->becado_ER,true);
		$criteria->compare('nacionalidad_ER',$this->nacionalidad_ER,true);
		$criteria->compare('id_RE',$this->id_RE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EstudianteR the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
