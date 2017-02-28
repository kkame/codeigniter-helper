<?php
/**
 * Created by PhpStorm.
 * User: kkame
 * Date: 17. 2. 27
 * Time: 오후 10:12
 */

namespace Kkame\Cistorm\Common;



class Parser
{

    protected $ciRootPath;


    protected $libraryList=[];

    protected $viewList=[];



    public function __construct($ciRootPath="")
    {

        if($ciRootPath)
            $this->setCiRootPath($ciRootPath);
    }


    public function setCiRootPath($ciRootPath)
    {
        if($this->validateCiIndexFile($ciRootPath))
            $this->ciRootPath=$ciRootPath;
        else
            //throw new \Exception($ciRootPath." is not Ci indexfile");
            return false;

        return true;

    }


    public function validateCiIndexFile($ciRootPath)
    {

        if(!file_exists($ciRootPath))
            return false;





    }



    protected function readLibraryPath()
    {

    }

}