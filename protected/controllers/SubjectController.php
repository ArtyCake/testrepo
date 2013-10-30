<?php

class SubjectController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
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
'actions'=>array('index','view','create','update','admin','delete'),
'roles'=>array('1','2'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
		public function actionView($id)
	{
		$subject=$this->loadModel($id);
		$theme=$this->newTheme($subject);
		$lesson=$this->newLesson($subject);

		$this->render('view',array(
			'model'=>$subject,
			'theme'=>$theme,
			'lesson'=>$lesson,
		));
	}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
$model=new Subject;

// Uncomment the following line if AJAX validation is needed
//$this->performAjaxValidation($subject);

if(isset($_POST['Subject']))
{
$model->attributes=$_POST['Subject'];
if($model->save())
$this->redirect(array('view','id'=>$model->ID));	
}
$this->render('create',array(
'model'=>$model,
));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Subject']))
{
$model->attributes=$_POST['Subject'];
if($model->save())
$this->redirect(array('view','id'=>$model->ID));
}

$this->render('update',array(
'model'=>$model,
'lessons'=>$lesson,
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}


/**
* Manages all models.
*/
public function actionIndex()
{
$model=new Subject('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Subject']))
$model->attributes=$_GET['Subject'];

$this->render('index',array(
'model'=>$model,
));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=Subject::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='subject-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}

protected function newTheme($subject)
	{
		$theme=new Themes;		
		if(isset($_POST['ajax']) && $_POST['ajax']==='themes-form')
		{
		echo CActiveForm::validate($theme);
		Yii::app()->end();
		}
		if(isset($_POST['Themes']))
		{

			$theme->attributes=$_POST['Themes'];			
			if($subject->addTheme($theme)){
				$this->refresh();
			}
			
		}
		return $theme;
	}


protected function newLesson($subject)
	{
		$lesson=new Lesson;		
		if(isset($_POST['ajax']) && $_POST['ajax']==='lesson-form')
		{
		echo CActiveForm::validate($lesson);
		Yii::app()->end();
		}
		if(isset($_POST['Lesson']))
		{

			$lesson->attributes=$_POST['Lesson'];			
			if($subject->addLesson($lesson)){
				$this->refresh();
			}
			
		}
		return $lesson;
	}
}

?>