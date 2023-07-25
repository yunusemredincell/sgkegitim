<?php

$server ="127.0.0.1";
$username="root";
$password="";

$connection = new mysqli($server,$username,$password);

if($connection->connect_error)
{
    die("Connection failed: ".$connection->connect_error);
}

else
{
    echo "Baglanti basarili";
    
    if($sonuc=$connection->query($sorgu))
    {
        echo '<table>';
        foreach($sonuc->fetch_all(MYSQLI_ASSOC) as $satir)
        {
            foreach($satir as $item => $kolon)
            echo '<tr><td>' .$item. '</td><td>' .$kolon. '</td></tr>';
        }
    }
}

?>
