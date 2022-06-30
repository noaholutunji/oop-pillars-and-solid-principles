class Login Module {
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

class NormalLogin implementsLoginInterface {

  public function authenticateUser($user)
  {
         //authentication logic for normal user
  }
}

class ThirdPartylLogin implementsLoginInterface {

  public function authenticateUser($user)
  {
        //authentication logic for third party user
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