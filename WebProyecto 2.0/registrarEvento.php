<?php

session_start();

include_once 'database/database.php';

$req = json_decode(file_get_contents('php://input'), true);

$res = [];
$res['status'] = 400;
$res['message'] = 'Error inesperado';

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('El método solicitado es incorrecto', 1);
    }
    if (
        !isset($req['date']) ||
        !isset($req['subtotal']) ||
        !isset($req['total']) ||
        !isset($req['start']) ||
        !isset($req['end']) ||
        !isset($_SESSION['IdCliente']) ||
        !isset($req['_service']) ||
        !isset($req['menu'])
    ) {
        throw new Exception("No se pudo registrar porque los datos estan incompletos", 1); 
    }

    $db = new Database();
    $connection = $db -> connection;

    if (!$connection) {
        throw new Exception($db -> message, 1);
    }

    $query = $connection -> prepare('INSERT INTO Reserva
        (
            FechaReserva, PrecioTotalDetalle, PrecioTotal, Estado,
            HoraInicio, HoraFin, IdCliente, IdServicio
        )
    VALUES
        (
            :date, :subtotal, :total, 1,
            :start, :end, :client, :service
        );
    SELECT SCOPE_IDENTITY();
    ');

    $query -> execute([
        ':date' => $req['date'],
        ':subtotal' => $req['subtotal'],
        ':total' => $req['total'],
        ':start' => $req['start'],
        ':end' => $req['end'],
        ':client' => $_SESSION['IdCliente'],
        ':service' => $req['_service']
    ]);

    $rowCount = $query -> rowCount();

    if($rowCount) {
        if (count($req['menu']) > 0) {
            foreach($req['menu'] as $menu) {

            }
        } else {
            $res['message'] = '¡MISIÓN CUMPLIDA! <br>
            SE HA RESERVADO SU EVENTO SATISFACTORIAMENTE';
        }
    } else {
        throw new Exception("Error al realizar esta reserva", 1);
    }
    $res['status'] = 200;

} catch (\Throwable $th) {
    $res['status'] = 400;
    $res['message'] = $th -> getMessage();
} finally {
    http_response_code($res['status']);
    header('Content-Type: application/json');
    echo json_encode($res);
}
