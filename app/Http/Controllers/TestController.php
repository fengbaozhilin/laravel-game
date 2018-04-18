<?php

namespace App\Http\Controllers;

use App\Contracts\Hzj;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //依赖注入
    protected  $test;
    public function __construct(Hzj $test){
        $this->test = $test;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     * @author LaravelAcademy.org
     */
    public function index()
    {
        // $test = App::make('test');
        // $test->callMe('TestController');
   //     $this->test->callMe('TestController1');
    }

//其他控制器动作
}
