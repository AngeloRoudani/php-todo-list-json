<?php 

    //guardo che ci sia almeno un file all'interno di dataList

    if (file_exists('dataList.json')) {

        //risprendo i file da datalist

        $string = file_get_contents('dataList.json');

        //e li riconverto in un formato leggibile per php

        $todoList = json_decode($string, true);

    } else {

        $todoList =[];

    }
    
    //e se ciò che inserisco non è vuoto o falso 

    if(isset($_POST['newItem'])) {

        //allora aggiungi 

        $todoList[] = [ "task" => $_POST['newItem'], "done" => false ];

        //creo un stringa di todoList

        $newString = json_encode($todoList);

        //prendo la stringa e la immetto in un file json

        file_put_contents('dataList.json', $newString);
    }

    header ('Content-Type: application/json');
    echo json_encode($todoList);

    if (isset($_POST['oldTask'])) {
        echo array_splice($todoList, $_POST['oldTask']);
        
    }

    /*if(isset($_POST['textLine'])) {

        $todolist[$_POST['textLine']] = 'done' => true;
        
    }*/


    
    ?>