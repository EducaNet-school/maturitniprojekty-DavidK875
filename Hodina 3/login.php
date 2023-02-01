class Login {
    private $username;
    private $password;
    private $errors;

    public function __construct() {
        $this->username = '';
        $this->password = '';
        $this->errors = array();
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function setErrors($errors) {
        $this->errors = $errors;
    }

    public function validateForm() {
        if (empty($this->username)) {
            $this->errors[] = 'Username is required';
        }
        if (empty($this->password)) {
            $this->errors[] = 'Password is required';
        }
        if (empty($this->errors)) {
            // check if the username and password match the database
            // if successful, start a session and redirect to the dashboard
        }
    }
}

$login = new Login();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login->setUsername($_POST['username']);
    $login->setPassword($_POST['password']);
    $login->validateForm();
}
