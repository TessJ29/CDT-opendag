<?php
require_once APPROOT . '../helpers/session_helper.php';
?>
<?php
class Login extends Controller
{
    private RegisterModel $registerModel;
    public function __construct()
    {
        $this->registerModel = $this->model('RegisterModel');
    }

    public function index()
    {
        $this->view("login");
    }
    /*public function login()
    {
        $this->registerModel->loginRegister();
    }
    */

    public function login()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $data = [
            'name/email' => trim($_POST['name/email']),
            'usersPwd' => trim($_POST['usersPwd'])
        ];

        if (empty($data['name/email']) || empty($data['usersPwd'])) {
            flash("login", "Please fill out all inputs");
            header("/login");
        }

        if ($this->registerModel->findUserByEmailOrUsername($data['name/email'], $data['name/email'])) {
            //User Found
            $loggedInUser = $this->registerModel->login($data['name/email'], $data['usersPwd']);
            if ($loggedInUser) {
                //Create session
                $this->createUserSession($loggedInUser);
            } else {
                flash("login", "Password Incorrect");
                redirect("/login");
            }
        } else {
            flash("login", "No user found");
            redirect("/login");
        }
    }


    public function createUserSession($user) {
        $_SESSION['usersId'] = $user->usersId;
        $_SESSION['usersName'] = $user->usersName;
        $_SESSION['usersEmail'] = $user->usersEmail;
        redirect("/admin");
    }
}
