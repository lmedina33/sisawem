<?php

/**
 * This is the model class for table "plantilla_consentrados".
 *
 * The followings are the available columns in table 'plantilla_consentrados':
 * @property integer $id_consentrado
 * @property integer $cedula_id_ER
 * @property string $nom_estudiante
 * @property double $periodo1
 * @property double $porc_p1
 * @property double $periodo2
 * @property double $porc_p2
 * @property double $periodo3
 * @property double $porc_p3
 * @property double $anual
 * @property string $estado_ER
 * @property integer $id_MP
 *
 * The followings are the available model relations:
 * @property HistorialAcademico[] $historialAcademicos
 * @property EstudianteR $cedulaIdER
 * @property ModuloPlantilla $idMP
 */
class PlantillaConsentrados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plantilla_consentrados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_id_ER, nom_estudiante, id_MP', 'required'),
			array('cedula_id_ER, id_MP', 'numerical', 'integerOnly'=>true),
			array('periodo1, porc_p1, periodo2, porc_p2, periodo3, porc_p3, anual', 'numerical'),
			array('nom_estudiante', 'length', 'max'=>50),
			array('estado_ER', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_consentrado, cedula_id_ER, nom_estudiante, periodo1, porc_p1, periodo2, porc_p2, periodo3, porc_p3, anual, estado_ER, id_MP', 'safe', 'on'=>'search'),
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
			'historialAcademicos' => array(self::HAS_MANY, 'HistorialAcademico', 'id_consentrado'),
			'cedulaIdER' => array(self::BELONGS_TO, 'EstudianteR', 'cedula_id_ER'),
			'idMP' => array(self::BELONGS_TO, 'ModuloPlantilla', 'id_MP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_consentrado' => 'Id Consentrado',
			'cedula_id_ER' => 'Cedula Id Er',
			'nom_estudiante' => 'Nom Estudiante',
			'periodo1' => 'Periodo1',
			'porc_p1' => 'Porc P1',
			'periodo2' => 'Periodo2',
			'porc_p2' => 'Porc P2',
			'periodo3' => 'Periodo3',
			'porc_p3' => 'Porc P3',
			'anual' => 'Anual',
			'estado_ER' => 'Estado Er',
			'id_MP' => 'Id Mp',
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

		$criteria->compare('id_consentrado',$this->id_consentrado);
		$criteria->compare('cedula_id_ER',$this->cedula_id_ER);
		$criteria->compare('nom_estudiante',$this->nom_estudiante,true);
		$criteria->compare('periodo1',$this->periodo1);
		$criteria->compare('porc_p1',$this->porc_p1);
		$criteria->compare('periodo2',$this->periodo2);
		$criteria->compare('porc_p2',$this->porc_p2);
		$criteria->compare('periodo3',$this->periodo3);
		$criteria->compare('porc_p3',$this->porc_p3);
		$criteria->compare('anual',$this->anual);
		$criteria->compare('estado_ER',$this->estado_ER,true);
		$criteria->compare('id_MP',$this->id_MP);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PlantillaConsentrados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
