<?php

/**
 * This is the model class for table "subject".
 *
 * The followings are the available columns in table 'subject':
 * @property integer $ID
 * @property string $Name
 * @property integer $Lector_ID
 */
class Subject extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Subject the static model class
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
		return 'subject';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name', 'required'),
			array('Name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, Name, Lector_ID', 'safe', 'on'=>'search'),
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
			'lector' => array(self::BELONGS_TO, 'user', 'Lector_ID'),
			'themes' => array(self::HAS_MANY, 'Themes', 'subject_id'),
			'themeCount' => array(self::STAT, 'Themes', 'subject_id'),
			'lessons' => array(self::HAS_MANY, 'Lesson', 'Subject_ID', 'order'=>'Date asc, Double_period asc'),
			'lessonCount' => array(self::STAT, 'Lesson', 'Subject_ID'),			
		);
	}

	protected function beforeSave()
	{
		$this->Lector_ID = Yii::app()->user->id;
		return true;
	}


	public function addTheme($theme)
	{
		$theme->subject_id=$this->ID;
		return $theme->save();
	}

		public function addLesson($lesson)
	{
		$lesson->Subject_ID=$this->ID;
		return $lesson->save();
	}



	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Name' => 'Название',
			'Lector_ID' => 'Лектор',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Lector_ID',$this->Lector_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}