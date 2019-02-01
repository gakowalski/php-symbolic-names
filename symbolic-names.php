<?php

// N/3
define('⅓', 1/3);
define('⅔', 2/3);

// N/5
define('⅕', 1/5);
define('⅖', 2/5);
define('⅗', 3/5);
define('⅘', 4/5);

// N/6

define('⅙', 1/6);
define('⅚', 5/6);

// N/7
define('⅐', 1/7);

// N/8
define('⅛', 1/8);
define('⅜', 3/8);
define('⅝', 5/8);
define('⅞', 7/8);

// N/9
define('⅑', 1/9);

// N/10
define('⅒', 1/10);


function √($arg) {
  return sqrt($arg);
}

function ∛($arg) {
  return pow($arg, ⅓);
}

function ∜($arg) {
  return √(√($arg));
}

function 𝜋() {
  return pi();
}

function 💭() {
  return call_user_func_array('sprintf', func_get_args());
}

function 💬() {
  return call_user_func_array('printf', func_get_args());
}

function 💤($arg) {
  return sleep ($arg);
}

function 🗚($arg) {
  return strtoupper ($arg);
}

function 🗛($arg) {
  return strtolower ($arg);
}

function 💥() {
  return call_user_func_array('explode', func_get_args());
}

function ✂(){
  return call_user_func_array('trim', func_get_args());
}
