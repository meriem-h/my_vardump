<?php

// $var = "Welcome to this pool";
// $var = ["chocolat", "lait"];
// $var = 6.8;
// $var = false;
// $var =
//     [
//         "Welcome to this pool",
//         ["banane", "fraise"],
//         // ["chocolat", "lait"],
//         // ["glace", "kiwi"],
//         [
//             "water polo",
//             ["glace", "kiwi"],
//             // ["orange", "papaille"]
//         ]
//     ];

$var =
    [
        "Welcome to this pool",
        2, 3.5,
        true,
        false,
        ["glace", "kiwi"],
        [
            "water polo",
            ["glace", "kiwi"],
        ]
    ];



function matrice($param, $i)
{

    $content = "";
    $space = "  ";


    foreach ($param as $key => $value) {
        $indextype = gettype($value);

        switch ($indextype) {

            case 'array':
                $count = count($value);

                $content = $content .

                    str_repeat($space, $i) . "[" . $key . "]=>" . "\n"
                    . str_repeat($space, $i) .  $indextype . "(" . $count . ")" . " {" . "\n"
                    . matrice($value, $i + 1) . str_repeat($space, $i) . "}"
                    . "\n";

                break;

            case 'string':
                $length = strlen($value);
                $content = $content . str_repeat($space, $i) .  '[' . $key . ']=>' . "\n"
                    .  str_repeat($space, $i) . $indextype . '(' . $length . ') "' . $value . '"' . "\n";
                break;


            case 'integer':
                $content = $content . str_repeat($space, $i) .  '[' . $key . ']=>' . "\n"
                    .  str_repeat($space, $i) . "int(" . $value . ")" . "\n";
                break;

            case 'double':
                $content = $content . str_repeat($space, $i) .  '[' . $key . ']=>' . "\n"
                    .  str_repeat($space, $i) .  "float(" . $value . ")" . "\n";
                break;

            case 'boolean':
                $content = $content . str_repeat($space, $i) .  '[' . $key . ']=>' . "\n"
                    .  str_repeat($space, $i) .  "bool(" . ($value ? 'true' : "false") . ")" . "\n";
                break;
        }
    }

    return $content;
}



function my_vardump($param)
{
    $type = gettype($param);


    switch ($type) {

        case 'array':
            $count = count($param);
            echo
            $type . "(" . $count . ")" . " {" . "\n" . matrice($param, 1) . '}' . "\n";
            break;

        case 'string':
            $length = strlen($param);
            echo $type . "(" . $length . ")" . ' "' . $param . '"' . "\n";
            break;

        case 'integer':
            echo "int(" . $param . ")" . "\n";
            break;

        case 'double':
            echo "float(" . $param . ")" . "\n";
            break;

        case 'boolean':
            echo "bool(" . ($param ? 'true' : "false") . ")" . "\n";
            break;
    }
}

// echo " =============== attendu ===============" . "\n";
// var_dump($var);
echo " =============== resultat ===============" . "\n";
my_vardump($var);
