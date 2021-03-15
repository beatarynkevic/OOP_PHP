<?php
class User {
    public $username;
    public $email;
    private $password;

    public function __construct($name, $email) {
        $this->username = $name;
        $this->email = $email;
    }

    public function setPass(int $pass) {
        $this->password = $pass;
    }

    public function getPass() {
        return $this->password;
    }

    public function addFriend() {
        return "$this->username added a new friend";
    }

}

$user_one = new User('Natasha', 'lalala@lala.la');
$user_two = new User('Alex', 'Alex@googl.ecom');
echo '<pre>';
$user_one->setPass(1230);
echo $user_one->getPass() .'<br>';

$user_one->username ='Tom';
print_r($user_one);
// print_r(get_class_vars('User'));
// print_r(get_methods_vars('User'));





// echo get_class($user_one);



?>