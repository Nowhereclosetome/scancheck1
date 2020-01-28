<?php
 
namespace app\models;
 
use Yii;
use yii\base\Model;
 
/**
 * Signup form
 */
class RegisterForm extends Model
{
 
    public $username;
    public $email;
    public $password;
    public $password_repeat;
 
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required', 'message' => 'Поле "Логин" не должно быть пустым.'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Этот логин уже используется. Пожалуйста введите другой.'],
            ['username', 'string', 'min' => 4, 'message' => 'Слишком короткое имя пользователя'],
            ['email', 'trim'],
            ['email', 'required', 'message' => 'Поле "Email" не должно быть пустым.'],
            ['email', 'email', 'message' => 'Введите корректный Email'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Эта почта уже используется. Пожалуйста введите другую почту.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6, 'message' => 'Пароль должен содержать минимум 6 символов.'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message' => 'Пароли не совпадают.']
        ];
    }
 
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
 
        if (!$this->validate()) {
            return null;
        }
 
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
 
}