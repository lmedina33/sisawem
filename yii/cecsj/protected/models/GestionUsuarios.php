<?php

/**
 * This is the model class for table "gestion_usuarios".
 *
 * The followings are the available columns in table 'gestion_usuarios':
 * @property integer $id_GU
 * @property string $usuario_GU
 * @property string $contrasena_GU
 * @property string $rol_GU
 * @property string $identificacion_GU
 */
class GestionUsuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gestion_usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_GU, contrasena_GU, rol_GU, identificacion_GU', 'required'),
			array('usuario_GU', 'length', 'max'=>15),
			array('contrasena_GU', 'length', 'max'=>64),
			array('rol_GU', 'length', 'max'=>20),
			array('identificacion_GU', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_GU, usuario_GU, contrasena_GU, rol_GU, identificacion_GU', 'safe', 'on'=>'search'),
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
			'id_GU' => 'Id Gu',
			'usuario_GU' => 'Usuario Gu',
			'contrasena_GU' => 'Contrasena Gu',
			'rol_GU' => 'Rol Gu',
			'identificacion_GU' => 'Identificacion Gu',
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

		$criteria->compare('id_GU',$this->id_GU);
		$criteria->compare('usuario_GU',$this->usuario_GU,true);
		$criteria->compare('contrasena_GU',$this->contrasena_GU,true);
		$criteria->compare('rol_GU',$this->rol_GU,true);
		$criteria->compare('identificacion_GU',$this->identificacion_GU,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GestionUsuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
