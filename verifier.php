<?php
echo 'Insira seu CPF: ';
$cpf = readline();

function removeponto($valor) {
    $regex = '/\D+/';
    return preg_replace($regex, '', $valor);
}

$cpfsemponto = removeponto($cpf);
if (strlen($cpfsemponto) != 11) {
    echo "CPF inválido!";
    exit;
}
echo "Esse é o seu CPF sem pontos e traços: ", $cpfsemponto, "\n";
$cpfinteiro = intval($cpfsemponto);

$cpfseparado = str_split($cpfsemponto, 1);

    $digito1 = $cpfseparado[0];
    $digito2 = $cpfseparado[1];
    $digito3 = $cpfseparado[2];
    $digito4 = $cpfseparado[3];
    $digito5 = $cpfseparado[4];
    $digito6 = $cpfseparado[5];
    $digito7 = $cpfseparado[6];
    $digito8 = $cpfseparado[7];
    $digito9 = $cpfseparado[8];
    $digito10 = $cpfseparado[9];
    $digito11 = $cpfseparado[10];

    $calculo1 = ($digito1*10)+($digito2*9)+($digito3*8)+($digito4*7)+($digito5*6)+($digito6*5)+($digito7*4)+($digito8*3)+($digito9*2);
    $primeirodigito = $calculo1 % 11;

    if ($primeirodigito == 0 || $primeirodigito == 1) {
        $primeirodigitoreal = 0;
    } else {
        $primeirodigitoreal = 11 - $primeirodigito;
    }

    $calculo2 = ($digito1*11)+($digito2*10)+($digito3*9)+($digito4*8)+($digito5*7)+($digito6*6)+($digito7*5)+($digito8*4)+($digito9*3)+($digito10*2);
    $segundodigito = $calculo2 % 11;

    if ($segundodigito == 0 || $segundodigito == 1) {
        $segundodigitoreal = 0;
    } else {
        $segundodigitoreal = 11 - $segundodigito;
    }

    $cpfstring = $digito1.$digito2.$digito3.$digito4.$digito5.$digito6.$digito7.$digito8.$digito9;
    $cpfstringcheio = $cpfstring . $primeirodigitoreal . $segundodigitoreal;

    if ($cpfstringcheio == $cpfsemponto) {
        echo "CPF válido!";
    } else {
        echo "CPF inválido!";
    }