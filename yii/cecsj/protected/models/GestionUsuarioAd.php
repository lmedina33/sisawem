<?php

/**
 * This is the model class for table "gestion_usuario_ad".
 *
 * The followings are the available columns in table 'gestion_usuario_ad':
 * @property integer $id_AD
 * @property string $usuario_AD
 * @property string $contrasena_AD
 */
class GestionUsuarioAd extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gestion_usuario_ad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_AD, contrasena_AD', 'required'),
			array('usuario_AD', 'length', 'max'=>15),
			array('contrasena_AD', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_AD, usuario_AD, contrasena_AD', 'safe', 'on'=>'search'),
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
			'id_AD' => 'Id Ad',
			'usuario_AD' => 'Usuario Ad',
			'contrasena_AD' => 'Contrasena Ad',
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

		$criteria->compare('id_AD',$this->id_AD);
		$criteria->compare('usuario_AD',$this->usuario_AD,true);
		$criteria->compare('contrasena_AD',$this->contrasena_AD,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GestionUsuarioAd the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
