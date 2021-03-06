<?php

namespace DesignPattern\Observer;

use DesignPattern\Observer\PatternSubject;
use DesignPattern\Observer\PatternObserver;

class Observer {
    function run() {
        function writeln($line_in) {
            echo $line_in."<br/>";
        }
        
        
        writeln('BEGIN TESTING OBSERVER PATTERN');
        writeln('');
    
        $patternGossiper = new PatternSubject();
        $patternGossipFan = new PatternObserver();
        $patternGossiper->attach($patternGossipFan);
        $patternGossiper->updateFavorites('abstract factory, decorator, visitor');
        $patternGossiper->updateFavorites('abstract factory, observer, decorator');
        $patternGossiper->updateFavorites('abstract factory, observer, decorator');
        $patternGossiper->detach($patternGossipFan);
        $patternGossiper->updateFavorites('abstract factory, observer, paisley');
    
        writeln('END TESTING OBSERVER PATTERN');
    }
}