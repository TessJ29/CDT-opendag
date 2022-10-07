<?php
    class Contact extends Controller
    {
        private ContactModel $contactModel;

        public function __construct()
        {
            
        }

        public function index()
        {
            $this->view("contact");
        }
    }
