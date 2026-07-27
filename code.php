<?php 
    include('db.php');

    if(isset($_POST['updateBtn']))
    {
        $id = $_POST['edit_id'];
        $firstname = $_POST['f_name'];
        $lastname = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];

        $query = "UPDATE user_info SET first_name='$firstname', last_name='$lastname', email='$email', password='$password', mobile='$mobile',
        address1='$address1', address2='$address2' WHERE user_id='$id' ";
        $query_run = mysqli_query($con, $query);
    
        if($query_run)
        {
           echo "<h1>Your Data Has Been Updated</h1>";
            header('refresh:2; url=index.php');
        }else{
            echo "Your Data Has <strong>Not!!!</strong> Been Updated";
            header('Location: profile_update.php');
        }
    }

?>