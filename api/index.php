<?php

function resumir_descricao($string, $chars) {
    if (strlen($string) > $chars)
        return substr($string, 0, $chars).'...';
    else
        return $string;
}

$ch = curl_init();

if (isset($_GET['slug'])) {
    curl_setopt($ch, CURLOPT_URL, 'https://sandboxapi.campuse.ro/agenda/activity/'.$_GET['slug'].'/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);

    curl_close($ch);

    $atividade = json_decode($server_output, true);    
    $atividade['start_date'] = str_replace(['Z','T'], ' ', $atividade['start_date']);
    $atividade['end_date'] = str_replace(['Z','T'], ' ', $atividade['end_date']);
} else {
    curl_setopt($ch, CURLOPT_URL, 'https://sandboxapi.campuse.ro/agenda/list/campus-party-brasil-2018/?order=startdate');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);

    curl_close($ch);

    $atividades = json_decode($server_output, true)['results'];

    $workshops = [];
    $talks = [];
    
    foreach ($atividades as $atividade) {
        $atividade['start_date'] = str_replace(['Z','T'], ' ', $atividade['start_date']);
        $atividade['end_date'] = str_replace(['Z','T'], ' ', $atividade['end_date']);
        
        if ($atividade['get_type'] == 'workshop') {
            $workshops[] = $atividade;
        }
        
        if ($atividade['get_type'] == 'talk') {
            $talks[] = $atividade;
        }
    }
}

?>