<?php

//Template Class
//Creates a Template/View object

class Template {
    //Path to template
    protected $template;
    //Variables passed in
    protected $vars = array();
    
    //Constructor
    public function __construct($template){
        $this->template = $template;
    }
    
    //Get template variables
    public function __get($key){
        return $this->vars[$key];
    }
    
    //Set template variables
    public function __set($key, $value){
        $this->vars[$key] = $value;
    }
    
    //Convert Object to String
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();
        
        include basename($this->template);
        return ob_get_clean();
    }
}