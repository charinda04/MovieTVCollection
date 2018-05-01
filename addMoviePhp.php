<?php  
  
include "db.php";
  
if(isset($_POST["name"])  )
{  


    // $target = "images/".basename($_FILES['image']['name']);
    // $image = $_FILES['image']['name'];

    // $username = $_SESSION['username'];

    // $articleTitle = $_POST["articleTitle"];
    // $articleDescription = $_POST["articleDescription"];
    // $articleContent = $_POST["articleContent"];

    // $date = date("Y-m-d");
            
    $name = $_POST["name"];

            

       
    try {
                    
        $msg = '';
               
        $statement = $database->prepare("INSERT INTO movie(name) VALUES(?)");
        $statement->execute(array($name));
        // $rows = $statement->rowCount();

        // if (move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
        //     $msg = 'Image uploaded successfully';
        // }

                    
        } catch(PDOException $ex) {
            echo "An Error occured!<br>";
            echo $ex->getMessage();
        }

 
 
  
    //if($rows>0)  
    {  

        // echo "<script>alert('Article successfully added!')</script>"; 
        // echo "<script>window.open('index.php','_self')</script>";  
  
        //$_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
     
} 
else  
    {  
      echo "<script>alert('Please fill all the fields!')</script>";  
    }  





// define variables and set to empty values
// $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $gender = $comment = $website = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $name = test_input($_POST["name"]);
//   }
  
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//   }
    
//   if (empty($_POST["website"])) {
//     $website = "";
//   } else {
//     $website = test_input($_POST["website"]);
//   }

//   if (empty($_POST["comment"])) {
//     $comment = "";
//   } else {
//     $comment = test_input($_POST["comment"]);
//   }

//   if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }
// }

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
?>