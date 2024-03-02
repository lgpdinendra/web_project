<?php 

    $con = mysqli_connect("localhost:3306","root","");
    if(!$con){
        die('Could not connect: '.mysqli_error($con));
    }
    echo "Connection Success<br>";
    
    mysqli_select_db($con,"studioK");

    //Creating tablle
    /*
    $qry = "CREATE TABLE booking(bookingID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            Cusname varchar(50),
            telephone varchar(50),
            category varchar(20),
            need varchar(20))";

    if(!mysqli_query($con,$qry)){
        die('Error : '.mysqli_error($con));
    }
    */

    //Accessing form details
    
    $name = $_POST['fname'];
    $phone = $_POST['Telephone'];
    $cat = $_POST['category'];
    $need = $_POST['need'];
    

    $qry = "INSERT INTO booking(Cusname,telephone,category,need) VALUES('$name','$phone','$cat','$need')";
    if(!mysqli_query($con,$qry)){
        die('Error : '.mysqli_error($con));
    }
    echo "<script>alert('Details Added, We will reach you soon !');window.location.href='shop.php'</script>";
    
    

    $count_query = "SELECT COUNT(*) AS row_count FROM booking";
    $result = mysqli_query($con, $count_query);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $row_count = $row['row_count'];
    } else {
        $row_count = 0;
    }
    echo $row_count;

    mysqli_close($con);

?>