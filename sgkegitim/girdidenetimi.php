<?php
session_start();
if (isset($_GET['veri'])) {
    $temizveri = $_GET['veri'];
  
   // $temizveri = strtolower($temizveri);  // in javascript ve can use upper and lower case together without any restriction. to avoid that we can change all letter with lower case.
   // $temizveri = str_replace("<script>", " ", $temizveri); // find <script> replace null. search on temizveri.
    // $temizveri = str_replace("</script>", " ", $temizveri); 
    echo htmlspecialchars($temizveri,ENT_QUOTES);
} else {
    echo "<form action='girdidenetimi.php' method='get'> Veri <input type='text' name='veri'> <br>
    <input type='submit'>
    </form>";
}

?>
