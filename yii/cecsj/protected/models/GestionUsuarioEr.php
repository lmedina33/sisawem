<?php

/**
 * This is the model class for table "gestion_usuario_er".
 *
 * The followings are the available columns in table 'gestion_usuario_er':
 * @property integer $cedula_id_ER
 * @property string $usuario_ER
 * @property string $contrasena_ER
 *
 * The followings are the available model relations:
 * @property EstudianteR $cedulaIdER
 */
class GestionUsuarioEr extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gestion_usuario_er';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_id_ER, usuario_ER, contrasena_ER', 'required'),
			array('cedula_id_ER', 'numerical', 'integerOnly'=>true),
			array('usuario_ER', 'length', 'max'=>15),
			array('contrasena_ER', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula_id_ER, usuario_ER, contrasena_ER', 'safe', 'on'=>'search'),
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
			'cedulaIdER' => array(self::BELONGS_TO, 'EstudianteR', 'cedula_id_ER'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula_id_ER' => 'Cedula Id Er',
			'usuario_ER' => 'Usuario Er',
			'contrasena_ER' => 'Contrasena Er',
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
		$criteria->compare('usuario_ER',$this->usuario_ER,true);
		$criteria->compare('contrasena_ER',$this->contrasena_ER,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GestionUsuarioEr the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
