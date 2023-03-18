
//unos podataka preko forme u bazu
/*
if (isset($_POST['submit'])) {
    $Ime = $_POST ['Ime'];
    $email = $_POST['email'];

    require 'connect.php';

    $Ime = mysqli_real_escape_string($conn, $Ime);
    $email = mysqli_real_escape_string($conn, $email);

    if (!empty($Ime) && !empty($email)) {

        $upit = "INSERT INTO tbl_pridruzi (Ime, email) 
        VALUES ('{$Ime}', '{$email}')";

        mysqli_query($conn, $upit);

        echo "Podaci su unijeti!";
    } 
    else {
        echo "Podaci nisu unijeti. Sva polja moraju biti popunjena!";
    }
} */

<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "db_pridruzi");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $Ime =  $_REQUEST['Ime'];
        $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO tbl_pridruzi  VALUES ('$Ime','$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$Ime\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    
</body>
 
</html>