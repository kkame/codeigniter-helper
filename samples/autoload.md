# Autoload Usages

```php
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{

    public $autoloader;

    public function __construct()
    {
        parent::__construct();
        $this->autoloader= new Kkame\Codeigniter\Autoloader();
    }
    
    
    public function index()
    {
        var_dump($this->autoloader->agent->is_browser());
    }
}


```