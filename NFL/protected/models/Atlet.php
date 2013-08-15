<?php

/**
 * This is the model class for table "atlet".
 *
 * The followings are the available columns in table 'atlet':
 * @property integer $atlet_id
 * @property integer $club_id
 * @property string $atlet_name
 * @property string $position
 * @property string $handphone_number
 * @property string $born_date
 *
 * The followings are the available model relations:
 * @property Club $cLUB
 */
class Atlet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Atlet the static model class
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
		return 'atlet';
	}
	
	public function add($record){
		
		mysql_query("INSERT INTO `nfl`.`atlet` (`atlet_id`, `club_id`, `atlet_name`, `position`, `handphone_number`, `born_date`) VALUES ($record)");
	}
	
	
	public function edit($id){
		$a=$id;
		return $a;	
	}
	
	public function update($record,$id){
		mysql_query("UPDATE  `nfl`.`atlet` SET  $record WHERE  `atlet`.`atlet_id` =$id");
	}
	
	public function delete($id){
		mysql_query("delete from `nfl`.`atlet` WHERE `atlet`.`atlet_id` = $id");
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('atlet_name, position, born_date', 'required'),
			array('club_id', 'numerical', 'integerOnly'=>true),
			array('atlet_name', 'length', 'max'=>30),
			array('position', 'length', 'max'=>10),
			array('handphone_number', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('atlet_id, club_id, atlet_name, position, handphone_number, born_date', 'safe', 'on'=>'search'),
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
			'cLUB' => array(self::BELONGS_TO, 'Club', 'CLUB_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'atlet_id' => 'Atlet',
			'club_id' => 'Club',
			'atlet_name' => 'Atlet Name',
			'position' => 'Position',
			'handphone_number' => 'Handphone Number',
			'born_date' => 'Born Date',
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

		$criteria->compare('atlet_id',$this->atlet_id);
		$criteria->compare('club_id',$this->club_id);
		$criteria->compare('atlet_name',$this->atlet_name,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('handphone_number',$this->handphone_number,true);
		$criteria->compare('born_date',$this->born_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}