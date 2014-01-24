<?php

/**
 * This is the model class for table "tbl_estate".
 *
 * The followings are the available columns in table 'tbl_estate':
 * @property integer $id
 * @property string $street_address
 * @property string $route
 * @property string $intersection
 * @property string $political
 * @property string $country
 * @property string $administrative_area_level_1
 * @property string $administrative_area_level_2
 * @property string $administrative_area_level_3
 * @property string $colloquial_area
 * @property string $locality
 * @property string $sublocality
 * @property string $neighborhood
 * @property string $premise
 * @property string $subpremise
 * @property string $postal_code
 * @property string $natural_feature
 * @property string $airport
 * @property string $park
 * @property string $point_of_interest
 * @property string $post_box
 * @property string $street_number
 * @property string $floor
 * @property string $room
 */
class Estate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_estate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('street_address, route, intersection, administrative_area_level_1, administrative_area_level_2, administrative_area_level_3, natural_feature', 'length', 'max'=>255),
			array('political, country, colloquial_area, locality, sublocality, neighborhood, premise, subpremise, postal_code, airport, park, point_of_interest, post_box, street_number, floor, room', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, street_address, route, intersection, political, country, administrative_area_level_1, administrative_area_level_2, administrative_area_level_3, colloquial_area, locality, sublocality, neighborhood, premise, subpremise, postal_code, natural_feature, airport, park, point_of_interest, post_box, street_number, floor, room', 'safe', 'on'=>'search'),
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
			'street_address' => 'Street Address',
			'route' => 'Route',
			'intersection' => 'Intersection',
			'political' => 'Political',
			'country' => 'Country',
			'administrative_area_level_1' => 'Administrative Area Level 1',
			'administrative_area_level_2' => 'Administrative Area Level 2',
			'administrative_area_level_3' => 'Administrative Area Level 3',
			'colloquial_area' => 'Colloquial Area',
			'locality' => 'Locality',
			'sublocality' => 'Sublocality',
			'neighborhood' => 'Neighborhood',
			'premise' => 'Premise',
			'subpremise' => 'Subpremise',
			'postal_code' => 'Postal Code',
			'natural_feature' => 'Natural Feature',
			'airport' => 'Airport',
			'park' => 'Park',
			'point_of_interest' => 'Point Of Interest',
			'post_box' => 'Post Box',
			'street_number' => 'Street Number',
			'floor' => 'Floor',
			'room' => 'Room',
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
		$criteria->compare('street_address',$this->street_address,true);
		$criteria->compare('route',$this->route,true);
		$criteria->compare('intersection',$this->intersection,true);
		$criteria->compare('political',$this->political,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('administrative_area_level_1',$this->administrative_area_level_1,true);
		$criteria->compare('administrative_area_level_2',$this->administrative_area_level_2,true);
		$criteria->compare('administrative_area_level_3',$this->administrative_area_level_3,true);
		$criteria->compare('colloquial_area',$this->colloquial_area,true);
		$criteria->compare('locality',$this->locality,true);
		$criteria->compare('sublocality',$this->sublocality,true);
		$criteria->compare('neighborhood',$this->neighborhood,true);
		$criteria->compare('premise',$this->premise,true);
		$criteria->compare('subpremise',$this->subpremise,true);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('natural_feature',$this->natural_feature,true);
		$criteria->compare('airport',$this->airport,true);
		$criteria->compare('park',$this->park,true);
		$criteria->compare('point_of_interest',$this->point_of_interest,true);
		$criteria->compare('post_box',$this->post_box,true);
		$criteria->compare('street_number',$this->street_number,true);
		$criteria->compare('floor',$this->floor,true);
		$criteria->compare('room',$this->room,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
