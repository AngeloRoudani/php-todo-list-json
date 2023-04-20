<?php 
    /*$todoList = [
        [
            "cibo" => "pane"
        ],
        [
            "commissione" => "andare in posta"
        ],
        [
            "pagamento" => "andare in banca"
        ],
        [
            "programmare" => "scrivere codice"
        ],
        [
            "giocare" => "giocare a Elden Ring"
        ],
        [
            "media" => "guardare un film"
        ]
    ]*/
    $todoList = [
        
        "pane",
        "andare in posta",
        "andare in banca",
        "scrivere codice",
        "giocare a Elden Ring",
        "guardare un film"
    ]

    header ('Content-Type: application/json');
    echo json_encode($todoList);
    ?>