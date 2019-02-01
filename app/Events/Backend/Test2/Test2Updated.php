<?php namespace App\Events\Backend\Test2;

use Illuminate\Queue\SerializesModels;
/**
 * Class Test2Updated.
 */
class Test2Updated
{
    use SerializesModels;
    /**
     * @var
     */

    public $test2;

    /**
     * @param $test2
     */
    public function __construct($test2)
    {
        $this->test2 = $test2;
    }
}