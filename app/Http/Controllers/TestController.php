<?php

namespace App\Http\Controllers;
use App\Contracts\TestContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;


class TestController extends Controller
{
    //依赖注入
    /**
     * @var TestContract
     */
    private $test = null;

    public function __construct(TestContract $test){
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
         $test = App::make('test');
         $test->callMe('TestController');
        $this->test->callMe('TestController');
    }
}
