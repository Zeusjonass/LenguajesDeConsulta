<?php
    function consultar($query) {
        $conexion = conectarBD();
        $query = mysqli_query($conexion, $query);
        for ($resultado = array(); $resul = mysqli_fetch_assoc($query); $resultado[] = $resul);
        desconectarBD($conexion);
        return $resultado;
    }

    function conectarBD() {
        $conexion = mysqli_connect("localhost", "root", "06201725Pu.", "inverseIndex");
        return $conexion;
    }

    function desconectarBD($conexion) {
        mysqli_close($conexion);
    }
?>