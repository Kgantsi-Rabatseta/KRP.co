<?php

/**
 * This is the model class for table "kr_users".
 *
 * The followings are the available columns in table 'kr_users':
 * @property string $_id
 * @property string $_version
 * @property string $_userName
 * @property string $_emailAddress
 * @property string $_name
 * @property string $_surname
 * @property string $_accessLevel_id
 * @property string $_dateTimeInserted
 * @property string $_password
 *
 * The followings are the available model relations:
 * @property Accesslevel $accessLevel
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kr_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('_userName, _emailAddress, _dateTimeInserted, _password', 'required'),
			array('_version', 'length', 'max'=>10),
			array('_userName, _emailAddress, _name, _surname', 'length', 'max'=>100),
			array('_accessLevel_id', 'length', 'max'=>20),
			array('_password', 'length', 'max'=>255),
			array('_emailAddress','email'),
			array('_userName, _name, _surname', 'length', 'min'=>1),
			array('_password', 'length', 'safe','min'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('_id,  _userName, _emailAddress, _name, _surname, _dateTimeInserted', 'safe', 'on'=>'search'),
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
			'accessLevel' => array(self::BELONGS_TO, 'Accesslevel', '_accessLevel_id'),
		);
	}

	public function getLevel()
	{
		return AccessLevel;
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'_id' => 'ID',
			'_version' => 'Version',
			'_userName' => 'User Name',
			'_emailAddress' => 'Email Address',
			'_name' => 'Name',
			'_surname' => 'Surname',
			'_accessLevel_id' => 'Access Level Id',
			'_dateTimeInserted' => 'Created',
			'_password' => 'Password',
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

		$criteria->compare('_id',$this->_id,true);
		$criteria->compare('_version',$this->_version,true);
		$criteria->compare('_userName',$this->_userName,true);
		$criteria->compare('_emailAddress',$this->_emailAddress,true);
		$criteria->compare('_name',$this->_name,true);
		$criteria->compare('_surname',$this->_surname,true);
		$criteria->compare('_accessLevel_id',$this->_accessLevel_id,true);
		$criteria->compare('_dateTimeInserted',$this->_dateTimeInserted,true);
		$criteria->compare('_password',$this->_password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
