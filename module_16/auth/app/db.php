<?php

/**
 * Connect function 
 */
function connect()
{
  return $connection = new mysqli(HOST, USER, PASS, DB);
}
