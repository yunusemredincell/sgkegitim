<?php
session_start();
if (isset($_GET['uname'])&& isset($_GET['password'])) 
{
    
  
    $server ="127.0.0.1";
    $username="root";
    $password="";
    $connection = new mysqli($server,$username,$password);
    $sorgu = "SELECT * FROM test.login where name= '".$_GET['uname']."'and password='".$_GET['password']."';";
    if($sonuc=$connection->query($sorgu))
    {
        echo '<table>';
        foreach($sonuc->fetch_all(MYSQLI_ASSOC) as $satir)
        {
            foreach($satir as $item => $kolon)
            echo '<tr><td>' .$kolon. '</td></tr>';
        }
    }
   $connection->close();
    
} else {
    echo "<form action='login.php' method='get'> Username <input type='text' name='uname'> <br>
    Password: <input type='text' name='password'> <br>
    <input type='submit'>
    </form>";
}

?>