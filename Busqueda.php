<!DOCTYPE html>
<html lang="es">
<!-- <?php
        include_once 'scripts/funciones.php';
        // include_once 'Datos.php';

        ?> -->

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>

    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        table {
            width: 80%;
            border-collapse: collapse;
        }
    </style>
</head>
<a href="Admin.php" ?>
    <button type="button" class="btn btn-sm btn-outline-secondary">ATRAS</button></a>

<body>
    <h2>Cuidadores</h2>
    <form action=" " method="POST">
        <label for="campo">Buscar:</label>
        <input type="text" name="campo" id="campo">
    </form>
    <p> </p>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th></th>
            <th></th>
        </thead>
        <tbody id="contenido"></tbody>


    </table>
    <script>
        getData()

        function getData() {

            document.getElementById("campo").addEventListener("keyup", getData)

            let input = document.getElementById("campo").value
            let content = document.getElementById("contenido")
            let url = "Datos.php"
            let formaData = new FormData()
            formaData.append('campo', input)

            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
    </script>

</body>

</html>