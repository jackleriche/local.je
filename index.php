<?php

    require 'server/src/SomethingController.php';

    $userA = new User("Jack", 32);
    echo "Hello, " . $userA->getName(). "! You are ". $userA->isAdult();
    echo "<br />";
    echo User::$NUMBER_OF_USERS;
    echo "<br />";
    echo "<br />";

    $userB = new User("Fred", 9);

    echo "Hello, " . $userB->getName(). "! You are ". $userB->isAdult();
    echo "<br />";
    echo User::$NUMBER_OF_USERS;

?>