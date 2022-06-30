<?php

use DB;
class User {
  //formatting the response
  protected function formatResponse($data) {
    return [
      "name"  => $data->name,
      "username"  => $data->username,
      "rank"  => $data->rank,
      "score"  => $data->score
    ];
  }

  //validation of user
protected function validateUser($user) {
  if($user) {
    return true;
  } else {
    throw new Exception("User doesn't exist");
  }
}
   //querying the database
   protected function fetchUserFromDatabase($userID) {
     return DB::table('users')->findOrFail($userID);
    }
  }