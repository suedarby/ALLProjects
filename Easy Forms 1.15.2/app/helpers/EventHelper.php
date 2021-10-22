<?php

namespace app\helpers;

use app\models\FormSubmission;
use Yii;
use yii\base\Component;
use yii\base\Event;

/**
 * Class EventHelper
 * @package app\helpers
 */
class EventHelper extends Component
{
    const SUPPORTED_FORM_EVENTS = 'supportedFormEvents';
    const SUPPORTED_FORM_EVENTS_IN_POST_REQUEST = 'supportedFormEventsInPostRequest';

    const EVENT_PAYPAL_PAYMENT_RECEIVED = 'paypalPaymentReceived';
    const STATUS_PAYPAL_PAYMENT_RECEIVED = 20;

    public $supportedFormEvents = null;
    public $supportedFormEventsInPostRequest = null;

    /**
     * Get Form event list
     * Used by Form Settings and Add-Ons
     *
     * @param bool $addons Include events triggered by add-ons
     * @return array
     */
    public static function supportedFormEvents($addons = false)
    {
        $formEvent = new EventHelper();
        $formEvent->supportedFormEvents = [
            FormSubmission::STATUS_ACCEPTED => Yii::t('app', 'Form is submitted'),
            FormSubmission::STATUS_VERIFIED => Yii::t('app', 'Email is verified by double opt-in'),
        ];
        if ($addons) {
            $formEvent->trigger(self::SUPPORTED_FORM_EVENTS);
        }
        return $formEvent->supportedFormEvents;
    }

    /**
     * Get Form event list
     * When we have a POST request dependency
     * Used by Payment Add-Ons
     *
     * @return array
     */
    public static function supportedFormEventsInPostRequest()
    {
        $formEvent = new EventHelper();
        $formEvent->supportedFormEventsInPostRequest = [
            FormSubmission::STATUS_ACCEPTED => Yii::t('app', 'Form is submitted'),
        ];
        $formEvent->trigger(self::SUPPORTED_FORM_EVENTS_IN_POST_REQUEST);
        return $formEvent->supportedFormEventsInPostRequest;
    }
}