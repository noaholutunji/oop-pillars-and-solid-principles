<?php
interface UserRepository
{
/**
 * @return collection //Doc blocker
 */

 public function getUserData();

}

class NormalUserRepository implements UserRepository {
    // returns a collection containing user data
    public function getUserData($userID)
    {
       return DB::table('users')->where('user_id', '=', $userID);
    }
  }
class ThirdPartyUserRepository implements UserRepository {
      // returns an array of user data
    public function getUserData($userID)
    {
        return Filesystem::getUserInformation($userID);
    } 

}

//-----------------------------------

