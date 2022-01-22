<link rel="stylesheet" href="Default.css">
<link rel="stylesheet" href="Temi.css">
<html>
<?php
 if (isset($_GET['theme'])) {
    $theme = $_GET['theme'];
    // print '<h1 style="padding-left: 40%; padding-right: 40%; text-justify:auto; font-family:Impact, Haettenschweiler, sans-serif ;">' . 'Caratteri = ' . strlen($_GET['theme']) . '</h1>';
    // print '<h1 style="padding-left: 40%; padding-right: 40%; text-justify:auto; font-family:Impact, Haettenschweiler, sans-serif ;">' . str_word_count($_GET['theme']) . ' Parole  ' . '</h1>';
    $a = str_word_count($_GET['theme']);
}
?>

<?php
  if ( $a > 550){
    echo '<h1 style="padding-left: 35%; padding-right: 35%; text-justify:auto; font-family:Impact, Haettenschweiler, sans-serif ; size: ">' . 'il tema è troppo lungo' . '</h1>';
 }
 if ($a >= 500 && $a <= 550){
    echo '<h1 style="padding-left: 35%; padding-right: 35%; text-justify:auto; font-family:Impact, Haettenschweiler, sans-serif ; size: ">' . 'il tema è di una lunghezza normale' . '</h1>';
 }
 if ($a >= 450 && $a <= 500) {
    echo '<h1 style="padding-left: 30%; padding-right: 40%; text-justify:auto; font-family:Impact, Haettenschweiler, sans-serif ; size: ">' . 'il tema è sufficentemente lungo' . '</h1>';
 };
 if ($a < 450 && $a > 0){
     echo '<h1 style="padding-left: 40%; padding-right: 40%; text-justify:auto; font-family:Impact, Haettenschweiler, sans-serif ; size: ">' . 'il tema è troppo corto' . '</h1>';
 }
 
?>
<?php
 if (array_key_exists('button1', $_POST)) {
    button1();
 } else if (array_key_exists('button2', $_POST)) {
    button2();
 }
 function button1()
 {
    $theme = $_GET['theme'];
    echo $theme;
 }
 function button2()
 {
    echo '';
 }
?>

<form method="post">
    <input type="submit" name="button1" class="button" value="Mostra"/>

    <input type="submit" name="button2" class="button" value="Nascondi"/>
</form>
<a href="main.php" class="previous" style="font-family: Arial, Helvetica, sans-serif;">&laquo; Indietro</a>

</html>
