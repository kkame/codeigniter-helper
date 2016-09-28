<?php

namespace Kkame\Codeigniter;

class Autoloader
{

    /**
     * var $ci Codeigniter
     */
    protected $ci;

    public function __construct()
    {
        $this->ci = & get_instance();
    }

    public function __get($class)
    {
        if(!isset($this->ci->$class))
        {
            if($coreLibrary=$this->checkCoreLibrary($class))
                $this->ci->load->library($coreLibrary);
            elseif(strpos($class,'_library')!==false || file_exists(APPPATH.'/libraries/'.$class.'.php'))
                $this->ci->load->library($class);
            elseif(strpos($class,'_model')!==false || file_exists(APPPATH.'/models/'.$class.'.php'))
                $this->ci->load->model($class);
            else
                return false;
        }

        return $this->ci->$class;
    }


    protected function checkCoreLibrary($class)
    {

        switch($class)
        {
            case "db":
                return "database";
            case "agent":
                return "user_agent";
            default:
                return false;
        }

    }
}