<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="colores.css">
    <link rel="stylesheet" href="Estilos/Estilos.css">
    <title>Colores</title>
</head>

<body>
    <form action="grupo5.php" method="post" id="form">
        <div><label>CODIGO 0</label><select name="element-color0" id="element-color0">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </div>
        <div><label>CODIGO 1</label><select name="element-color1" id="element-color1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </div>
        <div><label>CODIGO 2</label><select name="element-color2" id="element-color2">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </div>
        <div><label>CODIGO 3</label><select name="element-color3" id="element-color3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </div>
        <div><label>CODIGO 4</label><select name="element-color4" id="element-color4">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </div>
        <div><label>CODIGO 5</label><select name="element-color5" id="element-color5">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </div>
        <center>
        <input type="submit" class="btn1" id="btn" name="btnFinal" value="GENERAR COLOR">
        </center>
        
        

    </form>
    <main>
        <div class="container-mostrar">
            <h2>Color de fondo: <span class="color" id="color">#0097e6</span></h2>
        </div>
        <center>
            <div id="cambio">
                <h1>Cambio de color</h1>
            </div>
        </center>

    </main>

    <?php
    if ($_POST['btnFinal']) {
        $hexColor = "#";
        for ($i = 0; $i < 6; $i++) {
            $dato = $_POST["element-color$i"];
            $hexColor = $hexColor . $dato;
        };

        strval($hexColor);

        echo '
            <script >
                console.log("result","' . $hexColor . '");
                const color = document.querySelector(".color");
                color.textContent = "' . $hexColor . '";
                //document.body.style.backgroundColor = `' . $hexColor . '`;
                const cambio = document.querySelector("#cambio");
                cambio.style.backgroundColor = `' . $hexColor . '`;
            </script>';
    }
    ?>
</body>

</html>