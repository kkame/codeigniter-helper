<?php
/**
 * Created by PhpStorm.
 * User: kkame
 * Date: 17. 2. 27
 * Time: 오후 10:31
 */


use Kkame\Cistorm\Common\Parser;


class ParserTest extends \PHPUnit\Framework\TestCase
{
    use VladaHejda\AssertException;


    /**
     * @expectedException \Exception
     */
    public function testLoader()
    {


        $parser=new Parser();


        //Exception Test
        $this->assertFalse($parser->setCiRootPath('/home/projects/php/airtel/index.php'));
        $this->assertFalse($parser->setCiRootPath('/home/projects/php/airtel/htdocs/globals.php'));
        $this->assertTrue($parser->setCiRootPath('/home/projects/php/airtel/htdocs/index.php'));


    }

}
