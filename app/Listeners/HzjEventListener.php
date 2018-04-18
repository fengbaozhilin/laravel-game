<?php

namespace App\Listeners;

use App\Events\HzjEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class HzjEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  HzjEvent  $event
     * @return void
     */
    public function handle(HzjEvent $event)
    {
        //
        $post = $event->post1['id'];

        Log::info('保存文章到缓存成功！',['id'=>$post,'title'=>112]);
    }
}
