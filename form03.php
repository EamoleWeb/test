<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Form Generated From PHP</title>
</head>
<body>

<?php

error_reporting(E_ALL);

function input($label,$name,$type="text",$value="") {
    label($label,$name);
    $html = "<input id=\"$name\" name=\"$name\" type=\"$type\" value=\"$value\" />\r\n";
    $html .= "<br/>\r\n";
    echo $html;
}

function radio($name,$prompt,$value) {

    $html = "$prompt<input id=\"$name\" name=\"$name\" type=\"radio\" value=\"$value\" />\r\n";
    // $html .= "<br/>\r\n";
    echo $html;
}

function label($label,$name) {
    if(!empty($label)) {
        $html = "<label for=\"$name\">$label</label>\r\n";
        echo $html;
    }

}

function br() {
    echo "<br/>\r\n";
}

?>

<form method="post" action="https://webcetb.org/php/echo/index.php">
<?php
  
    input("Name:","name");
    input("Color","color","color","#090909");

    label("Gender","gender");
    radio("gender","Male","male");
    radio("gender","Female","female");
    radio("gender","Fluid","fluid");
    br();

    input("","submit","submit","Submit");

?>


</form>



    
</body>
</html>
