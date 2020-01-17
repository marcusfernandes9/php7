<?php
require_once 'classes/Produto.php';
require_once 'classes/Caracteristica.php';

//criação dos objetos
$p1 = new Produto('Chocolate', 10, 7);

//composição
$p1->addCaracteristica('Cor','Branco');
$p1->addCaracteristica('Peso','2.6kg');
$p1->addCaracteristica('Potência','20 watts RMS');

print "Produto: " . $p1->getDescricao() . "\n";
foreach($p1->getCaracteristicas() as $c){
  print "Caracteristica: " . $c->getNome() . " - " . $c->getValor() . "\n";
}
