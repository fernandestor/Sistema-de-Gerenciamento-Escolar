<?php
namespace App\Service;

use Psr\Log\LoggerInterface;

/** @package App\Service */
class MyService
{
    private ?LoggerInterface $logger;

    /**
     * @param App\Service\Lo *f165faef 
     * @return void 
     */
    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    /**
     * Interpolates context values into the message placeholders.
     */
    function interpolate($message, array $context = array())
    {
        // build a replacement array with braces around the context keys
        $replace = array();
        foreach ($context as $key => $val) {
            // check that the value can be cast to string
            if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
                $replace['{' . $key . '}'] = $val;
            }
        }
    
        // interpolate replacement values into the message and return
        return strtr($message, $replace);
    }
    
    // a message with brace-delimited placeholder names
    $message = "User {username} created";
    
    // a context array of placeholder names => replacement values
    $context = array('username' => 'bolivar');
    
        // echoes "User bolivar created"
        echo $this->interpolate($message, $context);
    }

    public function doSomething(): void
    {
        if ($this->logger) {
            $this->logger->info('Doing something in MyService.');
        }
    }
}