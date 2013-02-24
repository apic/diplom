<?php

/**
 * This is the model class for table "{{voprosy}}".
 *
 * The followings are the available columns in table '{{voprosy}}':
 * @property integer $id
 * @property string $test_id
 * @property string $vopros
 */

class Voprosy extends CActiveRecord
{
    public $voprosy;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Voprosy the static model class
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
		return '{{voprosy}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('test_id, vopros', 'required'),
			array('test_id', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, test_id, vopros', 'safe', 'on'=>'search'),
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
			'test_id' => 'Test',
			'vopros' => 'Vopros',
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
		$criteria->compare('test_id',$this->test_id,true);
		$criteria->compare('vopros',$this->vopros,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}