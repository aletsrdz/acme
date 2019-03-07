<?php

namespace app\models;

use Yii;
use yii\db\Expression; //para utilizarlo para las fechas

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $uid
 * @property string $username
 * @property string $email
 * @property string $password
 * @property int $status
 * @property bool $contact_email
 * @property bool $contact_phone
 * @property string $created
 * @property string $updated
 * @property string $auth_key
 *
 * @property Auth[] $auths
 * @property Message[] $FromMessages
 * @property Message[] $ToMessages
 * @property PhoneNumber[] $phoneNumbers
 * @property Trip[] $trips
 */
class User extends \yii\db\ActiveRecord
{

    const STATUS_INSERTED = 0; //Constantes 
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCKED = 2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            [['status'], 'default', 'value' => null],
            [['email'],'email'],
            [['status'], 'integer'],
            [['created', 'updated'], 'safe'],
            //[['uid', 'password', 'auth_key'], 'string', 'max' => 60],
            [['uid', 'password'], 'string', 'max' => 60],
            [['username'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 255],            
            [['email'], 'unique'],
            [['uid'], 'unique'],
        ];
    }

    public function beforeValidate(){
        if($this->isNewRecord){
            $this->setUid();//Va a la función setUid
            $this->status = 0;
            //$this->setAuthKey();
        }
        return parent::beforeValidate(); 
    }

    public function beforeSave($insert){
        if($this->isNewRecord){
            $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        }
        $this->updated = new Expression('NOW()');//Para guardar la fecha en el campo updated
        return parent::beforeValidate($insert); 
    }

    public function setUid(){
        //$this->uid = 'adfasdfasdfadf';
        //$this->uid = Yii::$app->getSecurity()->generatePasswordHash(date('YmdHis').rand(1, 999999));
        $this->uid = Yii::$app->security->generateRandomString(60);
    }
    /*
    public function setAuthKey(){
        $this->auth_key = Yii::$app->security->generateRandomString(60);
    }
    */


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'uid' => Yii::t('app', 'Uid'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'status' => Yii::t('app', 'Status'),
            'contact_email' => Yii::t('app', 'Contact Email'),
            'contact_phone' => Yii::t('app', 'Contact Phone'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            //'auth_key' => Yii::t('app', 'Auth Key'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuths()
    {
        return $this->hasMany(Auth::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFromMessages()
    {
        return $this->hasMany(Message::className(), ['from_user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToMessages()
    {
        return $this->hasMany(Message::className(), ['to_user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneNumbers()
    {
        return $this->hasMany(PhoneNumber::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrips()
    {
        return $this->hasMany(Trip::className(), ['user_id' => 'id']);
    }
}
