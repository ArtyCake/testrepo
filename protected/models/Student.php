<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $ID
 * @property string $Surname
 * @property string $Name
 * @property integer $Group_ID
 * @property integer $BirthYear
 */
class Student extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Surname, Name, Group_ID', 'required'),
			array('Group_ID, BirthYear', 'numerical', 'integerOnly'=>true),
			array('Surname', 'length', 'max'=>20),
			array('Name', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, Surname, Name, Group_ID, BirthYear', 'safe', 'on'=>'search'),
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
			'group' => array(self::BELONGS_TO, 'group', 'Group_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Surname' => 'Фамилия',
			'Name' => 'Имя',
			'Group_ID' => 'Группа',
			'BirthYear' => 'Год рождения',
		);
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('Surname',$this->Surname,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Group_ID',$this->Group_ID);
		$criteria->compare('BirthYear',$this->BirthYear);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


}