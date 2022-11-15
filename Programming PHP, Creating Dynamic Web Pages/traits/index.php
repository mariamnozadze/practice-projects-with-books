<?php
//To declare that a class should include a trait’s methods, include the use keyword and any number of traits, separated by commas

// trait Logger
// {
//     public function log($logString)
//     {
//         $className = __CLASS__;
//         echo date("Y-m-d h:i:s", time()) . ": [{$className}] {$logString}";
//     }
// }
// class User
// {
//     use Logger;
//     public $name;
//     function __construct($name = '')
//     {
//         $this->name = $name;
//         $this->log("Created user '{$this->name}'");
//     }
//     function __toString()
//     {
//         return $this->name;
//     }
// }
// class UserGroup
// {
//     use Logger;
//     public $users = array();
//     public function addUser(User $user)
//     {
//         if (!in_array($this->users, $user)) {
//             $this->users[] = $user;
//             $this->log("Added user '{$user}' to group");
//         }
//     }
// }
// $group = new UserGroup;
// $group->addUser(new User("Franklin")); 

//2012-03-09 07:12:58: [User] Created user 'Franklin'2012-03-09 07:12:58:
//[UserGroup] Added user 'Franklin' to group