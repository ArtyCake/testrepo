<?php

/**
 * This is the model class for table "themes".
 *
 * The followings are the available columns in table 'themes':
 * @property integer $id
 * @property string $theme
 * @property integer $lect_h
 * @property integer $pract_h
 * @property integer $lab_h
 * @property integer $subject_id
 */
class Themes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Themes the static model class
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
		return 'themes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lect_h, pract_h, lab_h, subject_id', 'numerical', 'integerOnly'=>true),
			array('theme', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, theme, lect_h, pract_h, lab_h, subject_id', 'safe', 'on'=>'search'),
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
			'subject' => array(self::BELONGS_TO, 'Subject', 'subject_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'theme' => 'Theme',
			'lect_h' => 'Lect H',
			'pract_h' => 'Pract H',
			'lab_h' => 'Lab H',
			'subject_id' => 'Subject',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('theme',$this->theme,true);
		$criteria->compare('lect_h',$this->lect_h);
		$criteria->compare('pract_h',$this->pract_h);
		$criteria->compare('lab_h',$this->lab_h);
		$criteria->compare('subject_id',$this->subject_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}