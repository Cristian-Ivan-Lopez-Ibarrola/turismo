<!DOCTYPE html>
<html>
    <head>
        <title>Página de ejemplo IFTS18</title>
        <link rel="stylesheet" href="./Estilos/Estilos.css">
    </head>

    <body>
        <h1>Lista de ejemplo 1</h1>
        <a href="compras.php">Soy un vinculo a la página de compras</a>
        <hr>
        <table >
            <tr>
                <td class="titulos">
                    Pack
                </td>
                <td class="titulos">
                    Descripción
                </td>
                <td class="titulos">
                    Precio
                </td>
                <td class="titulos">
                    Personas
                </td>
            </tr>
        <?php
        for($i=0;$i<10;$i++)
        {
        ?>
            <tr>
                <td class="lista">
                    a
                </td>
                <td class="lista">
                    b
                </td>
                <td class="lista">
                    e-c
                </td>
                <td class="lista">
                    <input type="button" value="Editar">
                </td>
            </tr>
        <?php
        };
        ?>
        </table>
        <p>Este es un párrafo de ejemplo</p>
    </body>
</html>