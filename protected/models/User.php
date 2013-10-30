<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $ID
 * @property string $surname
 * @property string $name
 * @property string $f_name
 * @property integer $role
 * @property string $login
 * @property string $password
 */
class User extends CActiveRecord
{

	const ROLE_ADMIN = 'admin';
    const ROLE_USER = 'user';
    const ROLE_BANNED = 'banned';
    public $verifyCode;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('surname, name, login, password', 'required'),			
			array('surname, f_name, login, password', 'length', 'max'=>20),
			array('name', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(), 'on'=>'registration'),
			array('id, surname, name, f_name, role, login, password', 'safe', 'on'=>'search'),
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
			'subject' => array(self::HAS_MANY, 'subject', 'Lector_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'surname' => 'Фамилия',
			'name' => 'Имя',
			'f_name' => 'Отчество',
			'role' => 'Role',
			'login' => 'Логин',
			'password' => 'Пароль',
			'verifyCode'=>'Код с картинки',
		);
	}


	protected function beforeSave()
	{
		$this->role = 1;	
		//$this->password = md5('sdf'.$this->password);
		$this->login = stripslashes($this->login);
    	$this->login = htmlspecialchars($this->login);
 		$this->password = stripslashes($this->password);
    	$this->password = htmlspecialchars($this->password);
		//удаляем лишние пробелы
	    $this->login = trim($this->login);
	    $this->password = trim($this->password);
		$this->password = md5('sdf'.$this->password);

		return true;
	}
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->ID);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('f_name',$this->f_name,true);
		$criteria->compare('role',$this->role);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}