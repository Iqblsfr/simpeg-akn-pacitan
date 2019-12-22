<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
*
* @property integer $id
* @property string $username
* @property string $password
* @property string $email
* @property string $authKey
* @property integer $role
* @property integer $created_at
* @property integer $updated_at

*/
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    /**
     * @inheritdoc
    */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
    */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
    */
    // public function rules()
    // {
    //     return [
    //         ['role', 'default', 'value' => self::STATUS_ACTIVE],
    //         ['role', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
    //     ];
    // }

    /**
     * @inheritdoc
    */
    public static function findIdentity($id)
    {
        //mencari user login berdasarkan IDnya dan hanya dicari 1.
        $user = User::findOne($id);
        if(count($user)){
            return new static($user);
        }
        return null;
    }

    /**
     * @inheritdoc
    */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        //mencari user login berdasarkan accessToken dan hanya dicari 1.
        $user = User::find()->where(['accessToken'=>$token])->one();
        if(count($user)){
            return new static($user);
        }
        return null;
    }

    /**
     * Finds user by username
    *
    * @param string $username
    * @return static|null
    */
    public static function findByUsername($username)
    {
        //mencari user login berdasarkan username dan hanya dicari 1.
        $user = User::find()->where(['username'=>$username])->one();
        if(count($user)){
            return new static($user);
        }
        return null;
    }

    /**
     * @inheritdoc
    */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
    */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
    */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
    *
    * @param string $password password to validate
    * @return bool if password provided is valid for current user
    */
    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }

    /**
     * Generates password hash from password and sets it to the model
    *
    * @param string $password
    */
    // public function setPassword($password)
    // {
    //     $this->password = Yii::$app->security->generatePasswordHash($password);
    // }
    //
    // /**
    //  * Generates "remember me" authentication key
    // */
    // public function generateAuthKey()
    // {
    //     $this->authKey = Yii::$app->security->generateRandomString();
    // }

}
