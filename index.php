<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>ToDo List</title>
</head>
<body class="bg-dark vh-100">
    <div id="app">
        <main>
            <div class="container mt-5 pt-3">
                <div class="row w-50 mx-auto">
                    <h1 class="text-white text-center">Todo List</h1>
                    <ul class="list-group">
                        <li v-for="element in todoList" class="list-group-item py-3">{{element}}</li>
                    </ul>
                    <div class="input-group col-fluid mt-3 ps-0">
                        <input type="text" class="form-control " aria-label="Recipient's username" aria-describedby="button-addon2" v-model="newItem" @keyup.enter="putDataInList">
                        <button class="btn btn-primary" type="button" id="button-addon2" @click="putDataInList">Aggiungi</button>
                    </div>

                </div>
            </div>
        </main>

    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>