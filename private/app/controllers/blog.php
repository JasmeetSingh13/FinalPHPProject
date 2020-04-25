<?php

class Blog extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {

        $this ->model("BlogModel");
        $posts = $this->BlogModel->getAllPosts();

        $input = Array("posts"=> $posts);
        $this->view("template/header");
        $this->view("blog/index",$input);
        $this->view("template/footer");
        
    }

    function Read($postId){
            //create blogModel
            $this ->model("BlogModel");
            //loading blog id
            //get blog details
        $post = $this ->BlogModel ->getPostById($postId);
            // fill in template with record
              $this->view("blog/header",$post);
            $this->view("blog/post",$post);
            $this->view("template/footer");
    }
    function Create(){
        //check if authenticated
        $is_auth = isset($_SESSION["username"]);
       //if no, redirect out
        if(!$is_auth){

            header("location: /blog");
            return;

        }

            if($_SERVER["REQUEST_METHOD"] == "POST"){

             $title =  $_POST["title"];
              $content =  $_POST["content"];
              $author = $_SESSION("username");

              $this ->model("BlogModel");
             $slug = $this->BlogModel->createPost($title,$author,$content);


              header("location: /blog/read/" .$slug);

        }else{
            //if  yes, show blog create form
            $this->view("template/header");
            $this->view("blog/create");
            $this->view("template/footer");
     
           
        }
        // collect blog information
        //don't forget the CSRF token, Validate.
        // create blogmodel
        //save the blog entry
    }



}
?>