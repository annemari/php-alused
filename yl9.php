//Ülesanne 9 Anne-Mari Eensaad 29/03/2021

<html>
    <head>
        <meta charset="utf-8">
        <title>Ulesanne9</title>
    </head>
    <body>
      <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label>Sisestage ees- ja perekonnanimi</label> <input type="text" name="kasutajan"><br>
        <label>Sisestage siia oma sõnum</label> <input type="text" name="sonum"><br>
        <input type="submit" value="Saada">
      </form>
    </body>
</html>

<?php
$kasutajan = $_GET["kasutajan"];
$sonum = $_GET["sonum"];

echo "Tere, ".ucwords($kasutajan)."!"."<br>";
$length = strlen($kasutajan);
$formatted = implode(".",str_split($kasutajan));
echo $formatted."."."<br>";

$replacesona = array("noob", "jobu", "loll");
$replace = "***";

echo str_replace($replacesona, $replace, $sonum)."<br>";

$email = array('ö', 'õ', 'ä', 'ü');
$emAsendus = array('o', 'o', 'a', 'y');
$khkemail = strtolower(str_replace($email, $emAsendus, $kasutajan))."@khk.ee";
echo str_replace(' ', '.', $khkemail);