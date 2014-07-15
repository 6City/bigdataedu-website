<?php

/**
 * This is the model class for table "t_user".
 *
 * The followings are the available columns in table 't_user':
 * @property string $id
 * @property string $name
 * @property string $pwd
 * @property string $email
 * @property string $title
 * @property string $company
 * @property string $phone
 * @property string $province
 * @property string $city
 * @property string $address
 * @property string $trade
 * @property string $QQ
 * @property string $www
 * @property string $demand
 * @property string $usertype
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, title, company, address, phone', 'required'),
			array('title, company, phone, province, city, address, trade, QQ, weibo, weixin, www, demand, usertype', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, pwd, email, title, company, phone, province, city, address, trade, weibo, weixin, QQ, www, demand, usertype', 'safe', 'on'=>'search'),
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
			'name' => '姓名',
			'pwd' => '密码',
			'email' => '邮箱',
			'title' => '职位',
			'company' => '公司名称',
			'phone' => '电话',
			'province' => '省份',
			'city' => '城市',
			'address' => '通信地址',
			'trade' => '行业',
			'QQ' => 'QQ',
			'weibo' => '微博', 
			'weixin'=> '微信',
			'www' => '博客',
			'demand' => '备注',
			'usertype' => '用户类型',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('pwd',$this->pwd,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('trade',$this->trade,true);
		$criteria->compare('QQ',$this->QQ,true);
		$criteria->compare('www',$this->www,true);
		$criteria->compare('demand',$this->demand,true);
		$criteria->compare('usertype',$this->usertype,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
