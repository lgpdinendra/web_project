<?php

    $con = mysqli_connect("localhost:3306","root","");
    if(!$con){
        die('Could not connect: '.mysqli_error($con));
    }
    echo "Connection Success<br>";
    
    mysqli_select_db($con,"studioK");

    /*
    $qry = "CREATE TABLE contact(contactID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fname varchar(30),
            lname varchar(30),
            email varchar(50),
            mobile varchar(12),
            appointment varchar(5),
            Msg varchar(100)
            )";

    if(!mysqli_query($con,$qry)){
        die('Error : '.mysqli_error($con));
    }
    */
    

    //Accessing form details
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $appoint = $_POST['apt'];
    $msg = $_POST['msg'];

    $qry = "INSERT INTO contact(fname,lname,email,mobile,appointment,Msg) VALUES('$fname','$lname','$email','$mobile','$appoint','$msg')";
    if(!mysqli_query($con,$qry)){
        die('Error : '.mysqli_error($con));
    }
    echo "<script>alert('Your message Sent, Thank you for visiting our page !');
            window.location.href='ContactPage.html'</script>";

    mysqli_close($con);

?>