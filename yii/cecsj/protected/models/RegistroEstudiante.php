<?php

/**
 * This is the model class for table "registro_estudiante".
 *
 * The followings are the available columns in table 'registro_estudiante':
 * @property integer $id_RE
 * @property string $anio_RE
 * @property string $nivel_RE
 * @property string $estado_RE
 * @property string $n_profe_guia_RE
 *
 * The followings are the available model relations:
 * @property EstudianteR[] $estudianteRs
 */
class RegistroEstudiante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro_estudiante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('anio_RE, nivel_RE, estado_RE, n_profe_guia_RE', 'required'),
			array('anio_RE', 'length', 'max'=>4),
			array('nivel_RE', 'length', 'max'=>8),
			array('estado_RE', 'length', 'max'=>15),
			array('n_profe_guia_RE', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_RE, anio_RE, nivel_RE, estado_RE, n_profe_guia_RE', 'safe', 'on'=>'search'),
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
			'estudianteRs' => array(self::HAS_MANY, 'EstudianteR', 'id_RE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_RE' => 'Id Re',
			'anio_RE' => 'Anio Re',
			'nivel_RE' => 'Nivel Re',
			'estado_RE' => 'Estado Re',
			'n_profe_guia_RE' => 'N Profe Guia Re',
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

		$criteria->compare('id_RE',$this->id_RE);
		$criteria->compare('anio_RE',$this->anio_RE,true);
		$criteria->compare('nivel_RE',$this->nivel_RE,true);
		$criteria->compare('estado_RE',$this->estado_RE,true);
		$criteria->compare('n_profe_guia_RE',$this->n_profe_guia_RE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RegistroEstudiante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
