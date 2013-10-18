<?php

/**
 * This is the model class for table "gestion_usuario_pr".
 *
 * The followings are the available columns in table 'gestion_usuario_pr':
 * @property integer $cedula_id_PR
 * @property string $usuario_PR
 * @property string $contrasena_PR
 *
 * The followings are the available model relations:
 * @property FuncionarioPr $cedulaIdPR
 */
class GestionUsuarioPr extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gestion_usuario_pr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_id_PR, usuario_PR, contrasena_PR', 'required'),
			array('cedula_id_PR', 'numerical', 'integerOnly'=>true),
			array('usuario_PR', 'length', 'max'=>15),
			array('contrasena_PR', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula_id_PR, usuario_PR, contrasena_PR', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula_id_PR' => 'Cedula Id Pr',
			'usuario_PR' => 'Usuario Pr',
			'contrasena_PR' => 'Contrasena Pr',
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
		$criteria->compare('usuario_PR',$this->usuario_PR,true);
		$criteria->compare('contrasena_PR',$this->contrasena_PR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GestionUsuarioPr the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
