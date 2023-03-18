<?php
//unos podataka preko forme u bazu

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
}