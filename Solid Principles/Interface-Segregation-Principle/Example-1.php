<?php 

interface ManageableInterface {
  public function beManaged();
}

interface WorkableInterface {
  public function work();
}

interface SleepableInterface {
  public function sleep();
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface {
  public function work()
  {
    // TODO: Implement work() method.
  }

  public function sleep()

  {
    return 'human sleeping';
  }

  public function beManged() 
  {
    $this->work();
    $this->sleep();

  }
}

class AndroidWorker implements WorkableInterface, ManageableInterface {
  public function work()
  {
    return 'android working';


  }
  public function beManged() 
  {
    $this->work();
  

  }
}

  class Captain {
    public function manage(ManageableInterface $worker)
    {
      $worker->beManaged();
     
    }
  }
 
