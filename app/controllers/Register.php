<?php 
   require_once APPROOT . '../helpers/session_helper.php';
?>

<?php
class Register extends Controller
{
    private RegisterModel $registerModel;
    public function __construct()
    {
        $this->registerModel = $this->model('RegisterModel');
    }

    public function index()
    {
        $this->view("register");
    }

    /*public function create()
    {
        $this->registerModel->createRegister();
    } */

    public function register()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $data = [
            'usersName' => trim($_POST['usersName']),
            'usersEmail' => trim($_POST['usersEmail']),
            'usersUid' => trim($_POST['usersUid']),
            'usersPwd' => trim($_POST['usersPwd']),
            'pwdRepeat' => trim($_POST['pwdRepeat'])
        ];

        //Validate inputs
        if (
            empty($data['usersName']) || empty($data['usersEmail']) || empty($data['usersUid']) ||
            empty($data['usersPwd']) || empty($data['pwdRepeat'])
        ) {
            flash("register", "Please fill out all inputs");
            redirect("/register");
        }

        if(!preg_match("/^[a-zA-Z0-9]*$/", $data['usersUid'])){
            flash("register", "Invalid username");
            redirect("/register");
        }

        if(!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)){
            flash("register", "Invalid email");
            redirect("/register");
        }

        if(strlen($data['usersPwd']) < 6){
            flash("register", "Invalid password");
            redirect("/register");
        } else if($data['usersPwd'] !== $data['pwdRepeat']){
            flash("register", "Passwords don't match");
            redirect("/register");
        }

        if($this->registerModel->findUserByEmailOrUsername($data['usersEmail'], $data['usersName'])){
            flash("register", "Username or email already taken");
            redirect("/register");
        }

        $data['usersPwd'] = password_hash($data['usersPwd'], PASSWORD_DEFAULT);

        if($this->registerModel->register($data)){
            redirect("/login");
        } else {
            die("Something went wrong");
        }
    }
}

