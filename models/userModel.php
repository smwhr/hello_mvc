<?php

function capitalize_name($unformatted){
  $formatted = ucwords($unformatted);
  return $formatted;
}

function compute_age($birthday){
  $age = date('Y') - date('Y', strtotime($birthday)); 
  if (date('md') < date('md', strtotime($birthday))) { 
      return $age - 1; 
  } 
  return $age; 
}