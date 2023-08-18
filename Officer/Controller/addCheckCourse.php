<?php
  session_start();
  include_once('../model/courseModel.php');


	if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $class = $_POST['class'];
    $description = $_POST['description'];


		if($name == "" || $class == "" || $description == ""){
			echo "null submission...";
		}else{

                        $userinfo = [
                            'name'=>$name,
                            'class'=>$class,
                            'description'=> $description

                        ];

                        $result = insert($userinfo);
                        if($result){
                          header('location: ../view/addCourse.php');
                        }else{
                          echo "not insert";
                        }


		}

	}
?>
