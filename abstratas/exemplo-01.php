<?php

interface Veiculo
{

  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo
{

  public function acelerar($velocidade)
  {
    echo "O veículo acelerou até " . $velocidade . " km/h.<br />";
  }

  public function frenar($velocidade)
  {
    echo "O veículo frenou até " . $velocidade . " km/h.<br />";
  }

  public function trocarMarcha($marcha)
  {
    echo "O veículo mudou para a marcha " . $marcha . ".<br />";
  }
}

class DelRey extends Automovel
{

  // public function empurrar()
  // {
  // }
}

$carro = new DelRey();

$carro->acelerar(200);
