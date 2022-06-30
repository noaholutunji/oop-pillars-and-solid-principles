<?php 

class Login {
  public function login ($user)
 {
    if ($user instanceof NormalUser) {

      $this->authenticateNormalUser($user);

    } else if ($user instanceof ThirdPartUser) {

      $this->authenticateThirdPartyUser($user); 
    }
  }
}

//=======================


interface LoginInterface
{
  public function authenticateUser($user);
}

class NormalLogin implements LoginInterface {

  public function authenticateUser($user)
  {
         //authentication logic for normal user
         return "normer user authenticated";
  }
}

class ThirdPartylLogin implements LoginInterface {

  public function authenticateUser($user)
  {
        //authentication logic for third party user
        return "third party user authenticated";
  }
}

// similar classes can be created further for any type of login
class LoginModule {
  // depending on the type of user instance, appropriate method will get call_user_method
  
  public function login($user)
  {
    $user->authenticateUser($user);
  }
}

$normalLogin = new NormalLogin();
var_dump($normalLogin->authenticateUser($user));