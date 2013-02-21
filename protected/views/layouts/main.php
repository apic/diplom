<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Инструкция', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Связь с администрацией', 'url'=>array('/site/contact')),
                                array('label'=>'Результаты', 'url'=>array('/result/index'), 'view'=>'result','visible'=> !Yii::app()->user->isGuest&& (Users::curentRoles(Yii::app()->user->id)==1||2)),
                                array('label'=>'Тестирование', 'url'=>array('/tests/index'),'view'=>'tests','visible'=> !Yii::app()->user->isGuest&& (Users::curentRoles(Yii::app()->user->id)==2)),    
                                array('label'=>'Можно что-то добавить', 'url'=>array('/page/index'), 'views'=>'page','visible'=> !Yii::app()->user->isGuest&& (Users::curentRoles(Yii::app()->user->id)==0)),
                                array('label'=>'Добавить тест', 'url'=>array('/testy/index'),'views'=>'testy','visible'=> !Yii::app()->user->isGuest&& (Users::curentRoles(Yii::app()->user->id)==1)),
                                array('label'=>'Добавить пользователя', 'url'=>array('/users/index'),'views'=>'users','visible'=> !Yii::app()->user->isGuest&& (Users::curentRoles(Yii::app()->user->id)==0)),
                                array('label'=>'Вход', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                            
		))); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
                
               <?php echo $content; ?>
               
	<div class="clear"></div>

	<div id="footer">
		&copy; <?php echo date('Y'); ?> Проект Сергея Гудымы.<br/>
		Авторские права защищены.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
