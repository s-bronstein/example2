<?php

$worlds = [
    "world-1",
    "world-2",
    "world-3",
    "world-4",
];

$currentWorld = 0;

function world()
{
   global $currentWorld, $worlds;
   return $worlds[$currentWorld];
}

function hello()
{
   echo world();
}

function setNextWorld()
{
   global $currentWorld, $worlds;
   ++$currentWorld;
   
   if ($currentWorld === count($worlds)) {
      $currentWorld = 0;
   }
}
