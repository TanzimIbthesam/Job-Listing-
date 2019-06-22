<?php 
class Template{
    //path to template
    protected $template;
    //Vars passed in
    protected $vars=array();
    //Constructors
    public function __construct($template){
    $this->template=$template;

    }
    public function __set($key,$value){
       $this->vars[$key]= $value;
    }
    public function __toString(){
        extract($this->vars);
       chdir($this->template());
       ob_start();
       include basename($this->template);
       return ob_get_clean();
    }
    
}


?>