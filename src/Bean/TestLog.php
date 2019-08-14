<?php declare(strict_types=1);


namespace AppTest\Bean;

use function basename;
use function context;
use function count;
use function date_default_timezone_get;
use DateTime;
use DateTimeZone;
use function debug_backtrace;
use Exception;
use function implode;
use function is_array;
use function is_bool;
use function is_string;
use function json_encode;
use function memory_get_peak_usage;
use function microtime;
use function sprintf;
use Swoft\Bean\Annotation\Mapping\Bean;
use Swoft\Co;
use Swoft\Exception\SwoftException;
use function urlencode;
use function var_export;

/**
 * Class TestLog
 *
 * @since 2.0
 *
 *
 */
class TestLog
{

    public function push()
    {
        echo 'dsdfdsfdsfdfsfdsfsdfsdf打开视频佛山开坡口怕';
    }

}
