<?php
class User {
    public $username;
    public $email;
    private $password;

    public function __construct($name, $email) {
        $this->username = $name;
        $this->email = $email;
    }

    public function __destruct() {
        echo "the user $this->username was removed";
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

class AdminUser extends User {
    public $level;

    public function __construct($userName, $email, $level) {
        $this->level = $level;
        parent::__construct($userName, $email);
    }
}

$user_one = new User('Natasha', 'lalala@lala.la');
$user_two = new User('Alex', 'Alex@googl.ecom');
$user_three = new AdminUser('yoshi', 'yoshi@jsjsj.lt', 5);





$user_one->setPass(1230);
$user_one->username ='Tom';
print_r($user_one);
// print_r(get_class_vars('User'));
// print_r(get_methods_vars('User'));

$userFour = clone $user_one;
// echo get_class($user_one);
?>