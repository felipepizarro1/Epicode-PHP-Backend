<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla PHP</title>
</head>
<body>
    <h2>Tabla de Ejemplo</h2>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Ejemplo de datos en PHP
            $usuarios = [
                ['id' => 1, 'nombre' => 'Juan', 'email' => 'juan@example.com'],
                ['id' => 2, 'nombre' => 'Ana', 'email' => 'ana@example.com'],
                ['id' => 3, 'nombre' => 'Carlos', 'email' => 'carlos@example.com'],
            ];

            // Iterar sobre los datos y mostrar en la tabla
            foreach ($usuarios as $usuario) {
                echo '<tr>';
                echo '<td>' . $usuario['id'] . '</td>';
                echo '<td>' . $usuario['nombre'] . '</td>';
                echo '<td>' . $usuario['email'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>