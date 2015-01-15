<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Marcus
 */
class Student {
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();               
    }
    
    function add_email($type, $address) {
        $this->emails[$type] = $address;
    }
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    // Calculate the average grade for the student
    function average(){
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total/count($this->grades);
    }
    
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (avg. grade: ' . number_format($this->average(),2) . ")\n";
        
        foreach($this->emails as $type=>$address){
           $result  .= $type . ': ' . $address . "\n";            
        }
        
        $result .= "\n";
        
        return '<pre>'. $result .'</pre>';
    }

}
