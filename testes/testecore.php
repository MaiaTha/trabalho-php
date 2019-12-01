<?php

require_once ("../classes/Core.php");

/**
 * Teste para verificar se ao tentar pegar a classe Core atraves do Boostrap
 * vem instancias diferente.
 *
 * Foi simulado a classe Bootstrap devido a erros com importação
 */
class BootstrapTest {
    /**
     * Retorna um objeto Core
     *
     * @return Core
     */
    public function getCore() {
        $core = Core::getInstance();
        return $core;
    }
}

$bootstrapTest = new BootstrapTest();

$core1 = $bootstrapTest->getCore();
$core2 = $bootstrapTest->getCore();

echo "São duas instâncias iguais? ";
if ($core1 === $core2) {
    echo "Teste sem erro, as intâncias são iguais";
} else {
    echo "Teste com erro, as instâncias são diferentes";
}