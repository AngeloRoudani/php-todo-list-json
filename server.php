<?php 
    $todoList = [
        
            "cibo" => "comprare il pane",

            "commissione" => "andare in posta",

            "pagamento" => "andare in banca",
    
            "programmare" => "scrivere codice",
        
            "giocare" => "giocare a Elden Ring",
        
            "media" => "guardare un film"
    ];

    header ('Content-Type: application/json');
    echo json_encode($todoList);

    if(isset($_POST['newItem'])) {
        $todoList['newTask'] = $_POST['newItem'];
    }
    ?>