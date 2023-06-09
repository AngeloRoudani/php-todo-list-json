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

    if (isset($_POST['oldTask'])) {
        //creo una stringa vuota
        $nothing = null;
        //uso funzione splice e inserisco l'array da cui rimuovo,
        //l'indice dell'elemento da rimuovere, quanti elementi rimuovere dall'indice(1),
        //e inserisco una stringa nulla in sostituzione
        array_splice($todoList, $_POST['oldTask'], 1, $nothing);

        //salvo tutto nel file json
        $newString = json_encode($todoList);

        file_put_contents('dataList.json', $newString);
        
    }
    //verifico il valore booleano della key cliccata 
    if(isset($_POST['textLine'])) {

        $indexValue = intval($_POST['textLine']);

        if($todoList[$indexValue]['done'] == false) {

            $todoList[$indexValue]['done'] = true;
            
        } else {

            $todoList[$indexValue]['done'] = false;
        }
    
        $newString = json_encode($todoList);

        file_put_contents('dataList.json', $newString);
    }


    header ('Content-Type: application/json');
    echo json_encode($todoList);



    
    ?>