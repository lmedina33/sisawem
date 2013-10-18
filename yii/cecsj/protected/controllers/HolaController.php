<?php
#http://localhost:8080/yii/cecsj/hola/index
class HolaController extends Controller
{
	public function actionIndex()
	{
		$model=CActiveRecord::model("Users")->findAll();
		$twitter="@codigofacilito";
		$this-> render("index",array("model"=>$model,"twitter" =>$twitter));
	}

}
