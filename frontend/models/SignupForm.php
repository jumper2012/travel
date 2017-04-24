<?php

namespace frontend\models;

use common\models\User;
use common\models\Account;
use common\models\DetailAccount;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model {

    public $username;
    public $email;
    public $password;
    public $retypePassword;
    public $first_name;
    public $last_name;
  //  public $telepon;
    public $country_name;
    public $country_id;
//    public $email;
    public $date_of_birth;
    public $telepone;
    
    public $status;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\Account', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['country_id', 'integer'],
            ['retypePassword', 'string'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\DetailAccount', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['first_name', 'string'],
            ['telepone', 'string'],
            ['last_name', 'string'],
            ['date_of_birth', 'string'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup() {
        if (!$this->validate()) {
            return null;
        }
        $user = new Account();
        $detailAccount = new DetailAccount();

        $user->validate();
        if ($user->validate()) {
            $user->username = $this->username;
            // $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->status = 0;
            $user->save();
        }
        //print_r($user->account_id);
      //  die();
        $detailAccount->validate();
        if ($detailAccount->validate()) {
            $detailAccount->account_id = $user->account_id;
            $detailAccount->first_name = $this->first_name;
            $detailAccount->last_name = $this->last_name;
            $detailAccount->email = $this->email;
            $detailAccount->date_of_birth = $this->date_of_birth;
            $detailAccount->country_id = $this->country_id;
             $detailAccount->telepon = $this->telepone;
           
            
            $detailAccount->save();
        }


        //       return $user->save() ? $user : null;
    }

}
