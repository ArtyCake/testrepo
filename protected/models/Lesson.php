<?php

/**
 * This is the model class for table "lesson".
 *
 * The followings are the available columns in table 'lesson':
 * @property integer $ID
 * @property integer $Subject_ID
 * @property string $Date
 * @property integer $Double_period
 * @property integer $Group_ID
 */
class Lesson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lesson the static model class
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
		return 'lesson';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Date, Double_period, Group_ID', 'required'),
			array('ID, Subject_ID, Double_period, Group_ID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, Subject_ID, Date, Double_period, Group_ID', 'safe', 'on'=>'search'),
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
			//'subject' => array(self::BELONGS_TO, 'subject', 'Subject_ID'),
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
			'Subject_ID' => 'Предмет',
			'Date' => 'День недели',
			'Double_period' => 'Пара',
			'Group_ID' => 'Группа',
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
		$criteria->compare('Subject_ID',$this->Subject_ID);
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('Double_period',$this->Double_period);
		$criteria->compare('Group_ID',$this->Group_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function beforeSave(){
		return true;

	}
}