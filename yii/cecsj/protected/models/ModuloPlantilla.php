<?php

/**
 * This is the model class for table "modulo_plantilla".
 *
 * The followings are the available columns in table 'modulo_plantilla':
 * @property integer $id_MP
 * @property integer $cedula_id_PR
 * @property string $departamento
 * @property string $nivel
 * @property string $anio
 *
 * The followings are the available model relations:
 * @property FuncionarioPr $cedulaIdPR
 * @property PlantillaConsentrados[] $plantillaConsentradoses
 */
class ModuloPlantilla extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modulo_plantilla';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_id_PR, departamento, nivel, anio', 'required'),
			array('cedula_id_PR', 'numerical', 'integerOnly'=>true),
			array('departamento', 'length', 'max'=>20),
			array('nivel', 'length', 'max'=>8),
			array('anio', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_MP, cedula_id_PR, departamento, nivel, anio', 'safe', 'on'=>'search'),
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
			'cedulaIdPR' => array(self::BELONGS_TO, 'FuncionarioPr', 'cedula_id_PR'),
			'plantillaConsentradoses' => array(self::HAS_MANY, 'PlantillaConsentrados', 'id_MP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_MP' => 'Id Mp',
			'cedula_id_PR' => 'Cedula Id Pr',
			'departamento' => 'Departamento',
			'nivel' => 'Nivel',
			'anio' => 'Anio',
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

		$criteria->compare('id_MP',$this->id_MP);
		$criteria->compare('cedula_id_PR',$this->cedula_id_PR);
		$criteria->compare('departamento',$this->departamento,true);
		$criteria->compare('nivel',$this->nivel,true);
		$criteria->compare('anio',$this->anio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuloPlantilla the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
