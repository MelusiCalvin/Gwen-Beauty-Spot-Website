<?php
    session_start();
    include('../db.php');

    if(isset($_POST['login_btn']))
    {
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM admin_info WHERE admin_email='$email_login' AND admin_password='$password_login' ";
        $query_run = mysqli_query($con, $query);

        if(mysqli_fetch_array($query_run)){
            $_SESSION['username'] = $email_login;
            header('location: index.php');
        }else{
            echo "Email / Password is incorrect";
            header('refresh:3; url=login.php');
        }
    }

    if(isset($_POST['logout_btn']))
    {
        session_destroy();
        header('location: login.php');
    }
    
    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];
        $name = $_POST['name'];
        $details = $_POST['details'];
        $price = $_POST['price'];
        $cat = $_POST['cat'];
        $brand = $_POST['brand'];
        $tags = $_POST['tags'];
        $picture = $_FILES["picture"]['tmp_name'];

        $running = "UPDATE products SET product_cat='$cat', product_brand='$brand' product_title='$name',
        product_price='$price', product_desc='$details', product_keywords='$tags', product_image='$picture' WHERE product_id='$id' ";
        $query_runs =   mysqli_query($con, $running);
        
        if($query_runs)
        {
            move_uploaded_file($_FILES['picture']['tmp_name'],"upload/".$_FILES["picture"]["name"] );
            echo "Your Data Is Updated";
            header('refresh: 3; url=productlist.php;');
        }else{
            echo "failed";
        }

    }
    

    if(isset($_POST['delete_btn']))
    {
        $delete_id = $_POST['delete_id'];
        
        $run = "DELETE FROM products WHERE product_id='$delete_id' ";
        $run_query = mysqli_query($con, $run);

        if($run_query)
        {
            echo 'SUCCESSFUL';
            header("refresh: 3; url=productlist.php");
        }
        else
        {

        }
    }





    ?>