<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
 <?php 
$greeting = "Hello world";
$myName = 'Roberta';
$integerExample = 1;
$doubleExample = 3.14;
print ($greeting);
print('<br>');
print($myName);
print('<br>');
print($integerExample);
print('<br>');
print($doubleExample);
print('<br>');
print(true);
print('<br>');


$name = 'Joel';
        print("We need more people like {$name} to help us!");
        print('<br>');
        print("We need more people like $name to help us!");
        print('<br>');
        print("We need more people like \"{$name}\" to help us!");
        print('<br>');
        print('We need more people like \'$name\' to help us!');

        $test;
        var_dump($test);
        print('<br>');

        $x = 5;
        $y = 2;
        $res = $x % $y;
        print("Dalinant {$x} iš {$y}, liekana yra {$res}<br>");
        print("Dalinant {$x} iš {$y}, liekana yra " . ($x % $y) . "!!!<br>");
        print('A' . 'B');

?>

</h1>
</body>
</html>
