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


echo " =============== attendu ===============" . "\n";
var_dump($var);
