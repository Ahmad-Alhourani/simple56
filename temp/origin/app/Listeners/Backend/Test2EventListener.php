<?php
namespace App\Listeners\Backend;

/**
 * Class Test2EventListener.
 */
/**
 * Class Test2Created.
 */
class Test2EventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Test2 Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Test2  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Test2 Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Test2\Test2Created::class,
            'App\Listeners\Backend\Test2EventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Test2\Test2Updated::class,
            'App\Listeners\Backend\Test2EventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Test2\Test2Deleted::class,
            'App\Listeners\Backend\Test2EventListener@onDeleted'
        );
    }
}
