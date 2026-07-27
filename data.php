<?php
 
                session_start();
                if (isset($_POST['name'])) {

                    if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['contact-email']) || empty($_POST['msg'])) {
                        $error = "All the field are required";
                        $_SESSION['error'] = $error;
                        header("Location: contact.php");
                    } else if (!filter_var($_POST['contact-email'], FILTER_VALIDATE_EMAIL)) {
                        $error = "Enter your valid email address";
                        $_SESSION['error'] = $error;
                        header("Location: contact.php");
                    } else if (strlen($_POST['msg']) < 10 && strlen($_POST['msg']) > 140) {
                        $error = "Message length should greater than 10 & less than 140 characters";
                        $_SESSION['error'] = $error;
                        header("Location: contact.php");
                    } else {

                        //connect to the database
                        $conn = mysqli_connect("localhost", "root", "", "code");
                        $name = $_POST['name'];
                        $email = $_POST['contact-email'];
                        $subject = $_POST['subject'];
                        $msg = $_POST['msg'];
                        $is_done = $conn->query("INSERT INTO `contact_us`( `name`, `email`, `subject`, `msg` ) VALUES( '$name','$email','$subject','$msg' )");
                        if ($is_done == TRUE) {
                            $_SESSION['success'] = '<div class="alert alert-success text-center">
                            <h3 style="color: #333;">Thank you for contacting us.</h3>
                            <p style="color: #333;">You are very important to us, all information received will always remain confidential. We will contact you as
                                soon as we review your message.</p>
            
                            <a class="btn btn-outline-secondary" href="contact.php"><i class="fa fa-refresh"></i></a>
            
                            </div><br><br>';
                            header("Location: contact.php");
                        }
                    }
                }
