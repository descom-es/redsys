<?php

namespace Descom\Redsys\Events;

use Closure;
use Descom\Redsys\Events\Event;
use ReflectionClass;

class Events
{
    private static ?Closure $paidCompletedSuccessfullyCallback = null;
    private static ?Closure $failedPaymentCallback = null;

    public static function paidCompletedSuccessfully(Closure $callBack): void
    {
        self::$paidCompletedSuccessfullyCallback = $callBack;
    }

    public static function failedPayment(Closure $callBack): void
    {
        self::$failedPaymentCallback = $callBack;
    }

    public static function dispatch(Event $event): bool
    {
        $baseName = (new ReflectionClass($event))->getShortName();

        if ($baseName === 'PaidCompletedSuccessfully' && self::$paidCompletedSuccessfullyCallback instanceof Closure) {
            $function = self::$paidCompletedSuccessfullyCallback;
            $function($event->response, $event);

            return true;
        }

        if ($baseName === 'FailedPayment' && self::$failedPaymentCallback instanceof Closure) {
            $function = self::$failedPaymentCallback;
            $function($event->response, $event);

            return true;
        }

        return false;
    }
}
