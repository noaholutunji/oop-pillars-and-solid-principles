<?php

interface CarInterface
{
  public function getFuel();
  public function shiftGear();
  public function steer();
}

class Car implements CarInterface
{
  public function getFuel()
  {
    //logic to get fuel
    return "I have fuel";
  }
  public function shiftGear()
  {
    //logic to get shift gear
    return "I have shift gear";
  }
  public function steer()
  {
    //logic to steer
    return "I have steer";
  }
}


class ElectricityCar implements carInterface
{
  public function getFuel()
  {
    // doesn't require to get fuel
    return null;
  }
  public function shiftGear()
  {
  }

  public function steer()
  {
  }
}

//======================================================


interface CarOperationInterface
{
  public function shiftGear();
  public function steer();
}

interface CarFuelInterface
{
  public function getFuel();
}

interface CarChargeInterface
{
  public function plugElectricity();
  public function doCharging();
  public function unplugElectricity();
}

class DieselCar implements CarOperationInterface, CarFuelInterface
{
  public function getFuel()
  {
    //logic to get fuel
    return "I have fuel";
  }
  public function shiftGear()
  {
    //logic to get shift gear
    return "I have shift gear";
  }
  public function steer()
  {
    //logic to steer
    return "I have steer";
  }
}


class ElectricCar implements CarOperationInterface, CarChargeInterface
{
  public function shiftGear()
  {
    return "I have shift gear";
  }

  public function steer()
  {
    return "I have steer";
  }
  public function plugElectricity()
  {
    return "I can plug electricity";
  }
  public function doCharging()
  {
    return "I can charge";
  }
  public function unplugElectricity()
  {
    return "I can unplug electricity";
  }
} 


$dieselcar = new DieselCar();
var_dump($dieselcar->getFuel());

$electriccar = new ElectricCar();
var_dump($electriccar->doCharging());