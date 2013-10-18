<?php

/**
 * This is the model class for table "estudiante_pi".
 *
 * The followings are the available columns in table 'estudiante_pi':
 * @property integer $id_estudiante_ep
 * @property string $identificacion_ep
 * @property string $fecha_solicitud
 * @property string $nombre_ep
 * @property string $fecha_na_ep
 * @property string $genero_ep
 * @property string $celular_ep
 * @property string $correo_ep
 * @property string $nivel_ep
 * @property string $direccion_ep
 * @property string $identificaci贸n_ma
 * @property string $nombre_ma
 * @property string $telefono_h_ma
 * @property string $telefono_t_ma
 * @property string $celular_ma
 * @property string $oficio_ma
 * @property string $lugar_trabajo_ma
 * @property string $identificaci贸n_pa
 * @property string $nombre_pa
 * @property string $telefono_h_pa
 * @property string $telefono_t_pa
 * @property string $celular_pa
 * @property string $oficio_pa
 * @property string $lugar_trabajo_pa
 */
class EstudiantePi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estudiante_pi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('identificacion_ep', 'length', 'max'=>11),
			array('nombre_ep, nombre_ma, nombre_pa', 'length', 'max'=>50),
			array('genero_ep, celular_ep, nivel_ep, identificaci贸n_ma, telefono_h_ma, telefono_t_ma, celular_ma, identificaci贸n_pa, telefono_h_pa, telefono_t_pa, celular_pa', 'length', 'max'=>10),
			array('correo_ep', 'length', 'max'=>60),
			array('direccion_ep', 'length', 'max'=>300),
			array('oficio_ma, oficio_pa', 'length', 'max'=>20),
			array('lugar_trabajo_ma, lugar_trabajo_pa', 'length', 'max'=>40),
			array('fecha_solicitud, fecha_na_ep', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_estudiante_ep, identificacion_ep, fecha_solicitud, nombre_ep, fecha_na_ep, genero_ep, celular_ep, correo_ep, nivel_ep, direccion_ep, identificaci贸n_ma, nombre_ma, telefono_h_ma, telefono_t_ma, celular_ma, oficio_ma, lugar_trabajo_ma, identificaci贸n_pa, nombre_pa, telefono_h_pa, telefono_t_pa, celular_pa, oficio_pa, lugar_trabajo_pa', 'safe', 'on'=>'search'),
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
			'id_estudiante_ep' => 'Id Estudiante Ep',
			'identificacion_ep' => 'Identificacion Ep',
			'fecha_solicitud' => 'Fecha Solicitud',
			'nombre_ep' => 'Nombre Ep',
			'fecha_na_ep' => 'Fecha Na Ep',
			'genero_ep' => 'Genero Ep',
			'celular_ep' => 'Celular Ep',
			'correo_ep' => 'Correo Ep',
			'nivel_ep' => 'Nivel Ep',
			'direccion_ep' => 'Direccion Ep',
			'identificaci贸n_ma' => 'Identificaci愠n Ma',
			'nombre_ma' => 'Nombre Ma',
			'telefono_h_ma' => 'Telefono H Ma',
			'telefono_t_ma' => 'Telefono T Ma',
			'celular_ma' => 'Celular Ma',
			'oficio_ma' => 'Oficio Ma',
			'lugar_trabajo_ma' => 'Lugar Trabajo Ma',
			'identificaci贸n_pa' => 'Identificaci愠n Pa',
			'nombre_pa' => 'Nombre Pa',
			'telefono_h_pa' => 'Telefono H Pa',
			'telefono_t_pa' => 'Telefono T Pa',
			'celular_pa' => 'Celular Pa',
			'oficio_pa' => 'Oficio Pa',
			'lugar_trabajo_pa' => 'Lugar Trabajo Pa',
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

		$criteria->compare('id_estudiante_ep',$this->id_estudiante_ep);
		$criteria->compare('identificacion_ep',$this->identificacion_ep,true);
		$criteria->compare('fecha_solicitud',$this->fecha_solicitud,true);
		$criteria->compare('nombre_ep',$this->nombre_ep,true);
		$criteria->compare('fecha_na_ep',$this->fecha_na_ep,true);
		$criteria->compare('genero_ep',$this->genero_ep,true);
		$criteria->compare('celular_ep',$this->celular_ep,true);
		$criteria->compare('correo_ep',$this->correo_ep,true);
		$criteria->compare('nivel_ep',$this->nivel_ep,true);
		$criteria->compare('direccion_ep',$this->direccion_ep,true);
		$criteria->compare('identificaci贸n_ma',$this->identificaci贸n_ma,true);
		$criteria->compare('nombre_ma',$this->nombre_ma,true);
		$criteria->compare('telefono_h_ma',$this->telefono_h_ma,true);
		$criteria->compare('telefono_t_ma',$this->telefono_t_ma,true);
		$criteria->compare('celular_ma',$this->celular_ma,true);
		$criteria->compare('oficio_ma',$this->oficio_ma,true);
		$criteria->compare('lugar_trabajo_ma',$this->lugar_trabajo_ma,true);
		$criteria->compare('identificaci贸n_pa',$this->identificaci贸n_pa,true);
		$criteria->compare('nombre_pa',$this->nombre_pa,true);
		$criteria->compare('telefono_h_pa',$this->telefono_h_pa,true);
		$criteria->compare('telefono_t_pa',$this->telefono_t_pa,true);
		$criteria->compare('celular_pa',$this->celular_pa,true);
		$criteria->compare('oficio_pa',$this->oficio_pa,true);
		$criteria->compare('lugar_trabajo_pa',$this->lugar_trabajo_pa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EstudiantePi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
