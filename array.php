

<?php
        $nome = isset($_POST['nome'])?$_POST['nome']:'',
        $sobrenome = isset($_POST['sobrenome'])?$_POST['sobrenome']:'',
        $email = isset($_POST['email'])?$_POST['email']:'',
        $telefone = isset($_POST['telefone'])?$_POST['telefone']:'',
        $nascimento = isset($_POST['nascimento'])?$_POST['nascimento']:'',
        $cidade = isset($_POST['cidade'])?$_POST['cidade']:'',
        $parente = isset($_POST['parente'])?$_POST['parente']:'',
        $rede = isset($_POST['rede'])?$_POST['rede']:'',
        $origem = isset($_POST['origem'])?$_POST['origem']:'',
        $sexo = isset($_POST['sexo'])?$_POST['sexo']:'',
        $foto = $destino;


    // pega informação enviada via post e guarda no vetor dados   
    $dados = array( 'Nome' => $nome,
                    'Sobrenome' => $sobrenome,
                    'Email' => $email,
                    'Telefone' => $telefone,
                    'Nascimento' => $nascimento,
                    'Cidade' => $cidade,
                    'Parente' => $parente,
                    'Rede'=> $redesocial,
                    'Origem' => $origem,
                    'Sexo' => $sexo,
                    'Foto'=>$destino, ); 

$dados = file_get_contents('contatos.json');
$vetor = json_decode($dados, true);
$Array[] = $dados;

$caminho = fopen('contatos.json', 'w+');

fwrite($caminho, json_encode($vetor));  
header('location : index.html')
?>
