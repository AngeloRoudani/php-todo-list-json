<?php 
    $todoList = [
        
            "cibo" => "pane",
        
    
            "commissione" => "andare in posta",
        
        
            "pagamento" => "andare in banca",
        
    
            "programmare" => "scrivere codice",
        
        
            "giocare" => "giocare a Elden Ring",
        
        
            "media" => "guardare un film"
    ];

    header ('Content-Type: application/json');
    echo json_encode($todoList);

    if(isset($_POST['newItem'])) {
        $todoList[] = $_POST['newItem'];
    }
    ?>