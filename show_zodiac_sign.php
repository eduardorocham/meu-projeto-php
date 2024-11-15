<?php
include('layouts/header.php');

$data_nascimento = $_POST['data_nascimento'];

$dia = intval(substr($data_nascimento, 8, 2));
$mes = intval(substr($data_nascimento, 5, 2));

$xml = simplexml_load_file('signos.xml');

function encontrar_signo($dia, $mes, $xml) {
    foreach ($xml->signo as $signo) {
        $dataInicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
        $dataFim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);

        if (($dia >= $dataInicio->format('d') && $dia <= $dataFim->format('d')) && $mes == $dataInicio->format('m')) {
            return (string)$signo->signoNome;
        }
    }
    return 'Não foi possível encontrar o signo.';
}

// Encontra o signo do usuário
$signo = encontrar_signo($dia, $mes, $xml);

?>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Seu signo é:</h2>
        <div class="alert alert-primary text-center" role="alert">
            <?php echo $signo; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>