<?php
session_start();
$message = '';
$error = '';
$file = 'xAPI.json';
$nomeObjeto = "ALGORITMOS E PROGRAMACAO I";


$data =  date('l jS \of F Y h:i:s A');
    
        if(file_exists($file))
        {
            //Trata informação de ID e nome
            if(!empty($_POST["nome"]) && !empty($_POST["inicio"])){
                $verbo = "Acessou o Objeto ".$nomeObjeto;

                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }

             //Trata informação de ID e pagina
             if(!empty($_POST["nome"]) && !empty($_POST["pagina"])){
                $verbo = "Acessou a pagina ".$_POST["pagina"];

                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }

            //INICIO ENZO

            //Trata informação de ID e play no audio
            if(!empty($_POST["nome"]) && !empty($_POST["audio_play"])){
                $verbo = "Deu play no audio ".$_POST["audio_play"];

                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }

            //Trata informação de ID e final no audio
            if(!empty($_POST["nome"]) && !empty($_POST["audio_ended"])){
                $verbo = "Ouviu o audio ate o final ".$_POST["audio_ended"];

                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }

            // Trata informação de ID e pause no audio
            if(!empty($_POST["nome"]) && !empty($_POST["audio_pause"])){
                $verbo = "Deu pause no audio ".$_POST["audio_pause"];

                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }

            //Trata informação de ID e play no video
            if(!empty($_POST["nome"]) && !empty($_POST["video_play"])){
                $verbo = "Deu play no video ".$_POST["video_play"];

                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }

            //Trata informação de ID e final no video
            if(!empty($_POST["nome"]) && !empty($_POST["video_ended"])){
                $verbo = "Viu o video ate o final ".$_POST["video_ended"];

                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }

            //Trata informação de ID e pause no video
            if(!empty($_POST["nome"]) && !empty($_POST["video_pause"])){
                $verbo = "Deu pause no video ".$_POST["video_pause"];

                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }

            //Trata informação de ID e escolha da alternativa 
            if(!empty($_POST["nome"]) && !empty($_POST["alternativa"]) && !empty($_POST["exercicio"])){
                $verbo = "Escolheu alternativa '".$_POST["alternativa"]."' do Exercicio '".$_POST["exercicio"]."'.";
                
                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $extra = array (
                    'nome' => $_POST["nome"],
                    'verbo' => $verbo,
                    'data' => $data
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents($file, $final_data))
                {   
                    $message = "<label class='text-success'>Sucesso!</p>";
                }   
            }
            //FIM ENZO
        } else {
            echo "Arquivo JSON não existe!";
        }


?>
