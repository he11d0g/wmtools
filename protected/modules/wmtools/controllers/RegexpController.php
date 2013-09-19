<?php

class RegexpController extends Controller
{
	public function actionIndex()
	{
        $model = new Regexp();
        if(isset($_POST['Regexp'])){
            $model->attributes = $_POST['Regexp'];
            preg_match($model->template,$model->text,$model->result);

        }

		$this->render('index',array('model' =>$model));
	}
}