<?php

if ( ! $_POST ) 
{
    header('Location: /propuesta');
} 
else
{
    if ( empty($_POST['nombres']) ) {
        echo "Por favor rellene todos los campos del formulario.";
        die();
    }
    if ( empty($_POST['telefono']) ) {
        echo "Por favor rellene todos los campos del formulario.";
        die();
    }
    if ( empty($_POST['email']) ) {
        echo "Por favor rellene todos los campos del formulario.";
        die();
    }
    if ( empty($_POST['tipo_habitacion']) ) {
        echo "Por favor rellene todos los campos del formulario.";
        die();
    }
    if ( empty($_POST['cant_habitacion']) ) {
        echo "Por favor rellene todos los campos del formulario.";
        die();
    }
    if ( empty($_POST['cant_personas']) ) {
        echo "Por favor rellene todos los campos del formulario.";
        die();
    }
    if ( empty($_POST['fecha_inicio']) ) {
        echo "Por favor rellene todos los campos del formulario.";
        die();
    }
    $para  = 'demo@gmail.com'; 
    $titulo = 'Formulario de Pre-Reserva';
    
    $mensaje = '<html>';
    $mensaje .= '<head>';
    $mensaje .= '<title>Detalles del Formulario de Pre-Reserva</title>';    
    $mensaje .= '</head>';
    $mensaje .= '<body>';
    $mensaje .= '<a href="http://amazoncity.com.pe/propuesta" title="Amazon City - Inicio"><img src="http://amazoncity.com.pe/propuesta/images/logo-amazon.png" class="img-responsive" alt="Amazon City Hosting Resort"></a>';
    $mensaje .= '<div class="page-header">';
    $mensaje .= '<h1 class="text-center">Datos del Formulario de PRE-RESERVA</h1>';
    $mensaje .= '</div>';
    $mensaje .= '<br/>';
    $mensaje .= '<p>Nombres: <strong>' . $_POST['nombres'] . '</strong></p>';
    $mensaje .= '<p>Telefono: <strong>' . $_POST['telefono'] . '</strong></p>';
    $mensaje .= '<p>Correo Electronico: <strong>' . $_POST['email'] . '</strong></p>';
    $mensaje .= '<p>Tipo de Habitación: <strong>' . $_POST['tipo_habitacion'] . '</strong></p>';
    $mensaje .= '<p>Cantidad de Habitaciones: <strong>' . $_POST['cant_habitacion'] . '</strong></p>';
    $mensaje .= '<p>Cantidad de Personas: <strong>' . $_POST['cant_personas'] . '</strong></p>';
    $mensaje .= '<p>Fecha de inicio de reserva: <strong>' . $_POST['fecha_inicio'] . '</strong></p>';
    $mensaje .= '<p>Fecha de fin de reserva: <strong>' . $_POST['fecha_final'] . '</strong></p>';
    $mensaje .= '</body>';
    $mensaje .= '</html>';

    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    
    $tipocorreos=explode('@',$para);

    if ($tipocorreos['1']=='gmail.com'){
        
        // Cabeceras adicionales para gmail
        $cabeceras .= "From: Ventas" . "\r\n";
    }
    else {
        // Cabeceras adicionales para hotmail y demas
        $cabeceras .= 'From: Vetas <ventas@amazoncity.com.pe>' . "\r\n";
    }
    
    if (mail($para, $titulo, $mensaje, $cabeceras)) {
        echo "Gracias por hacer su Pre-Reserva, trataremos de responderle lo más pronto posible.";
    } else {
        echo "Ocurrio un error al tratar de hacer su Pre-Reserva.";
    }

}

?>