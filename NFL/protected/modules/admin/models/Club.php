<?php

/**
 * This is the model class for table "club".
 *
 * The followings are the available columns in table 'club':
 * @property integer $club_id
 * @property string $club_name
 * @property string $username
 * @property string $password
 * @property string $location
 * @property string $join_date
 * @property string $contact_person_name
 * @property string $contact_person_phone
 * @property string $logo
 * @property string $submit
 *
 * The followings are the available model relations:
 * @property Atlet[] $atlets
 * @property ClubCompetition[] $clubCompetitions
 */
class Club extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Club the static model class
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
		return 'club';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('club_name, username, password, location, contact_person_name, contact_person_phone', 'required'),
			array('club_name, username, password, location, contact_person_name, logo', 'length', 'max'=>30),
			array('contact_person_phone', 'length', 'max'=>15),
			array('submit', 'length', 'max'=>10),
			array('join_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('club_id, club_name, username, password, location, join_date, contact_person_name, contact_person_phone, logo, submit', 'safe', 'on'=>'search'),
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
			'atlets' => array(self::HAS_MANY, 'Atlet', 'CLUB_ID'),
			'clubCompetitions' => array(self::HAS_MANY, 'ClubCompetition', 'CLUB_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'club_id' => 'Club',
			'club_name' => 'Club Name',
			'username' => 'Username',
			'password' => 'Password',
			'location' => 'Location',
			'join_date' => 'Join Date',
			'contact_person_name' => 'Contact Person Name',
			'contact_person_phone' => 'Contact Person Phone',
			'logo' => 'Logo',
			'submit' => 'Submit',
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

		$criteria->compare('club_id',$this->club_id);
		$criteria->compare('club_name',$this->club_name,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('join_date',$this->join_date,true);
		$criteria->compare('contact_person_name',$this->contact_person_name,true);
		$criteria->compare('contact_person_phone',$this->contact_person_phone,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('submit',$this->submit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}