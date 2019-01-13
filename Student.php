<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author veerd
 */
class Student {
    
    //Constructor initializing the properties
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Setting email address
    function add_email($which, $address) {
     $this->emails[$which] = $address;
    }
    
    //Setting grades
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Calculating grades average
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    //Formatting output
    function toString() {
        $result = print "$this->first_name $this->surname:";
        $result = "Average Grade    | " . $this->average() . "\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . '       | ' . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}
