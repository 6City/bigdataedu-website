<?php

/**
 * This is the model class for table "t_event".
 *
 * The followings are the available columns in table 't_event':
 * @property integer $id
 * @property string $eventname
 * @property string $introduce
 * @property string $begindate
 * @property string $createdate
 * @property string $isuse
 * @property string $enddate
 */
class Event extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, eventname, createdate', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('eventname', 'length', 'max'=>200),
			array('isuse', 'length', 'max'=>1),
			array('introduce, begindate, enddate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, eventname, introduce, begindate, createdate, isuse, enddate', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'eventname' => 'Eventname',
			'introduce' => 'Introduce',
			'begindate' => 'Begindate',
			'createdate' => 'Createdate',
			'isuse' => 'Isuse',
			'enddate' => 'Enddate',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('eventname',$this->eventname,true);
		$criteria->compare('introduce',$this->introduce,true);
		$criteria->compare('begindate',$this->begindate,true);
		$criteria->compare('createdate',$this->createdate,true);
		$criteria->compare('isuse',$this->isuse,true);
		$criteria->compare('enddate',$this->enddate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
