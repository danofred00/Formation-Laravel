<?php
$user = [
        "nom" => "John",
        "prenom" => "Doe",
        "age" => 20
];

$navigation = [
        [
                'url' => '#',
                'label' => 'Accueil'
        ],
        [
                'url' => '#',
                'label' => 'Mes Projets'
        ],
        [
                'url' => '#',
                'label' => 'Contact'
        ],
        [
                'url' => '#',
                'label' => 'Mes Services'
        ],
        [
                'url' => '#',
                'label' => 'Mon CV'
        ]
];

$isConnected = false;
?>

<!Doctype>
<html>
<head>
    <title>Intro PHP</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        nav ul li a {
            text-decoration: none;

            &:hover {
                text-decoration: underline;
            }
        }
    </style>
</head>
<body>
<nav>
    <ul>

        <?php

            foreach ($navigation as $item) {
                $url = $item['url'];
                $label = $item['label'];

                echo '<li><a href="' . $url . '">' . $label . '</a></li>';
            }
        ?>

    </ul>
</nav>
</body>
</html>