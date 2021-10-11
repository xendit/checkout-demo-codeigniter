<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Env {

    public function __construct() {
        $env = Dotenv\Dotenv::createUnsafeImmutable(dirname(BASEPATH));
        $env->load();
    }
}