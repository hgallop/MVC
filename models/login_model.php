<?php 

class Login_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function run() {
        $sth = $this->db->prepare(
            "SELECT id FROM users WHERE username = :username AND password = :password"
        );
        $sth->execute(array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password']
        ));
        //$data = $sth->fetchAll();
        $count = $sth->rowCount();
        if ($count > 0) {
            Session::init();
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
        }
        print_r($data);
    }
}

?>