<?php
namespace PDS\LoginBundle\LoginService;

use Symfony\Component\BrowserKit\Request;
class PDSLoginService
{
    public function __construct(Request $request = null){
        var_dump($request);exit;
    }
}