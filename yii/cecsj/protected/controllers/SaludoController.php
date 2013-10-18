<?php
class SaludoController extends Controller
{
	
public function actionIndex(){
	
	$saludo= 'Hola Mundo';
	$this->render('index',array('saludo' =>$saludo));
}	
}
