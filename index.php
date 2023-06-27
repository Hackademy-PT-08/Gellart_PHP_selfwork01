<?php

// ---- 1
// variables
// $integer = 2;
// $float = 2.2; 
// $string = "Hi"; 
// $boolean = true;

// echo for the terminal
// echo $boolean;


// cost
// const INTEGER = 2;
// const FLOAT = 2;
// const STRING = 2;
// const BOOLEAN = 2;

// for the terminal
// echo INTEGER;


// --- 2

// wrong
// $1text = "Marco";
// $text2 = "hai";
// $text.3 = "sete";
// $text4 = "?";
// @text5 = "Perchè";
// $te-xt6 = '$text2';
// $text 7 = 'bevuto';
// $text8 = "tutto"

// right
// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = '$text2';
// $text7 = 'bevuto';
// $text8 = "tutto";

// echo $text1 . "\n" . $text2 . "\n" . $text3 . "\n" . $text4 . "\n" . $text5 . "\n" . $text2 . "\n" . $text7 . "\n" . $text8;



// --- 3


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta',
];

$words2 = [

    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [

        'Virgilio',
        'smarrita',
        'ché'
    ]
];


$del = "del";
$di = "di";  



$results = $words1[6][3][1][1] .' '. $words1[6][3][0] . ' ' . $del . ' ' . $words1[6][3][1][0] . ' ' . $di . ' ' . $words2["elemento2"] . ' ' . $words1[2] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words1[6][3][1][2][0] . ' ' . $words1[6][0] . ' ' . $words1["elemento3"][2] . ' ' . $words1[6][3][1][2][1] . ' ' . $words1[7] . ' ' . $words1[6][3][1][2][2][0] . ' ' . $words1[6][1] . ' ' . $words2["elemento3"][1];

var_dump($results)

?>