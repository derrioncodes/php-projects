<?php
namespace App\Controllers;
use App\Models\EmailModel;
use Core\DBConnection;

class PageController {
    public function index(){
        $formError = false;
        // echo "<h1>Home Page From Controller</h1>";
        $EmailModel = new EmailModel(DBConnection::start());

        // dd($EmailModel->totalEmails());

        view("index", [
            "name" => "James",
            "totalEmails" => $EmailModel->totalEmails(),
            "formError" => $formError

        ]);
    }

    public function store(){
        $EmailModel = new EmailModel(DBConnection::start());

        if($_POST['email'] != ""){
            
            // echo "<h1>Home Page From Controller</h1>";
            
        
            // dd($EmailModel->totalEmails());
            if($EmailModel->insert($_POST['email'])){
                redirect("http://localhost:8080/thank-you");
            } else {
                view("index", [
                    "name" => "James",
                    "totalEmails" => $EmailModel->totalEmails(),
                    "formError" => true, 
                    "formErrorMessage" => "There was a problem saving the data"
                ]);
            }

        } else {
            view("index", [
                "name" => "James",
                "totalEmails" => $EmailModel->totalEmails(),
                "formError" => true,
                "formErrorMessage" => "Please make sure you add a valid email, form can't be empty"
            ]);

        }
        
    }

    public function thankyou(){
        view("thank-you");
    }
};

