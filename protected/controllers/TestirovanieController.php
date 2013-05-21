<?php

class TestirovanieController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        public $check;
        public $otv;
        /**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','test','distsiplina','check','result'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Lists all models.
	 */
       
        public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Testirovanie');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
       
       
        public function actionCheck($id){
            Yii::app()-> session ['result'];
            if(empty($_POST['check'])) die('пустые ответы');
            $result = $_POST['check'];
            $total_correct_answers_count = 0;
            $correct_answers_count = 0; // Счётчик правильных ответов
            $test = Testy::model()->findbypk($id);
            $criteria = new CDbCriteria();
            $criteria->addColumnCondition(array('test_id'=>$id));
            
            $questions = Voprosy::model()->findAll($criteria);

            foreach ($questions as $question){
               $criteria = new CDbCriteria();
               $criteria->addColumnCondition(array('voprosy_id	'=>$question->id));
               $answers = Otvety::model()->findAll($criteria);
               foreach ($answers as $answer){
                   if($answer->true)
                       $total_correct_answers_count++;
               }
               
            }
   
            foreach ($result as $vid=>$otveti){
      
                foreach ($otveti as $oid=> $otvet){
                  
                    $db_otvet = Otvety::model()->findByPk($oid);
                    
                    if($db_otvet->true)
                        $correct_answers_count++;
                }
            }
            //сохранение результата
            $result_model = new Result();
            $result_model->test_id = $id;
            $result_model->point =(($correct_answers_count/$total_correct_answers_count) * 100);
            $result_model->result =  round(($correct_answers_count/$total_correct_answers_count),1)*10;
            $result_model->user_id = Yii::app()->user->id;
            $result_model->save();
        $this->render('Result', array(
        'total_correct_answers_count'=>$total_correct_answers_count,
        'correct_answers_count'=>$correct_answers_count,
));
		
        }
        public function actionTest($id)
        {
            $model=$this->loadModel($id);
            $this->render('test',array(
			'model'=>$model,
		));
        }
        public function actionDistsiplina($id)
        {
            $criteria = new CDbCriteria();
            $criteria->addColumnCondition(array('category'=>$id));
            $models = Testy::model()->findAll($criteria);
            $this->render('distsiplina',array(
			'models'=>$models,
		));
            
        }

        /**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Testirovanie the loaded model
	 * @throws CHttpException
	 */
        
             
	public function loadModel($id)
	{
		$model=  Testirovanie::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
                
	}

	/**
	 * Performs the AJAX validation.
	 * @param Testirovanie $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='testirovanie-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
