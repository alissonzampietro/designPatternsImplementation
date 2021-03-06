<?php

namespace DesignPattern\AbstractFactory;

use DesignPattern\AbstractFactory\AbstractBook;

abstract class AbstractMySQLBook extends AbstractBook {
    protected $subject = "MySQL";
}