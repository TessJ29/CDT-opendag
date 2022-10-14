<?php
    class Admin extends Controller
    {
        private RegisterModel $registerModel;
        public function __construct()
        {
            $this->registerModel = $this->model('RegisterModel');
        }

        public function index()
        {
            $records = $this->registerModel->getAccount();
            $rows = '';
            foreach($records as $value)
            {
                $rows .= "<tr>
                      <td>$value->usersId</td>
                      <td>$value->usersName</td>
                      <td>$value->usersEmail</td>
                      <td>$value->usersUid</td>
                      <td><a href='" . URLROOT . "/admin/update/$value->usersId'>update</a></td>
                      <td><a href='" . URLROOT . "/admin/delete/$value->usersId'>delete</a></td>
                    </tr>";
            }

            $data = [
                'title' => "Account formulier",
                'rows' =>$rows
            ];
            $this->view('admin/admin', $data);

        }

        public function delete($id) {
            $this->registerModel->deleteAccount($id);

            $data = [
                'deleteStatus' => "<h1>Het record met id = $id is verwijdert"
            ];
            $this->view("admin/delete", $data);
            header("Refresh:2; url=" . URLROOT . "/admin/admin");
        }

        public function update($id=null){
           if ($_SERVER["REQUEST_METHOD"] == "POST")
           {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->registerModel->updateAccount($_POST);
            header("Location: " . URLROOT . "/admin/admin");
           } else {
            $row = $this->registerModel->getSingleAccount($id);
            $data = [
               'title'=> '<h1>Update Account</h1>',
               'row' => $row
            ];
            $this->view("admin/update", $data);
           }
        }
    }
?>