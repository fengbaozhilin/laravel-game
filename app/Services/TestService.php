<?php
namespace App\Services;

use App\Contracts\Hzj;

class  TestService extends Hzj {


    public function callMe($controller)
    {
        // TODO: Implement callMe() method.
        dd('Call Me From TestServiceProvider In '.$controller);
    }

}