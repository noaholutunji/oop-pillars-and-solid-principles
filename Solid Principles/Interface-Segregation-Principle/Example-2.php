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
  }
  public function shiftGear()
  {
    //logic to get shift gear
  }
  public function steer()
  {
    //logic to steer
  }
}


class ElectricCar implements carInterface
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
  }
  public function shiftGear()
  {
    //logic to get shift gear
  }
  public function steer()
  {
    //logic to steer
  }
}


class ElectricCar implements CarOperationInterface, CarChargeInterface
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
  public function plugElectricity()
  {

  }
  public function doCharging()
  {

  }
  public function unplugElectricity()
  {
    
  }
}
