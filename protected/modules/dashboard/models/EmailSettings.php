<?php

class EmailSettings extends CiiSettingsModel
{
	protected $SMTPHost = NULL;

	protected $SMTPPort = NULL;

	protected $SMTPUser = NULL;

	protected $SMTPPass = NULL;

	protected $notifyName = NULL;

	protected $notifyEmail = NULL;

	public $preContentView = 'application.modules.dashboard.views.settings.email-test';

	public function rules()
	{
		return array(
			array('notifyName, notifyEmail', 'required'),
			array('notifyEmail', 'email'),
			array('SMTPPort', 'numerical', 'integerOnly' => true, 'min' => 0),
			array('SMTPPass', 'password'),
			array('notifyName, SMTPPass, SMTPUser', 'length', 'max' => 255)
		);
	}

	public function attributeLabels()
	{
		return array(
			'SMTPHost' => Yii::t('Dashboard.models-email', 'SMTP Hostname'),
			'SMTPPort' => Yii::t('Dashboard.models-email', 'SMTP Port Number'),
			'SMTPUser' => Yii::t('Dashboard.models-email', 'SMTP Username'),
			'SMTPPass' => Yii::t('Dashboard.models-email', 'SMTP Password'),
			'notifyName' => Yii::t('Dashboard.models-email', 'System From Name'),
			'notifyEmail' => Yii::t('Dashboard.models-email', 'System Email Address')
		);
	}
}