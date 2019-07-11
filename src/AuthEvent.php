<?php

namespace terabytesoft\events\user;

use yii\base\Event;

/**
 * Class AuthEvent
 *
 * Auth events applications
 **/
class AuthEvent extends Event
{
    /**
     * event is triggered before authenticating user via social network
     * triggered with \terabytesoft\events\user\AuthEvent
     **/
    const BEFORE_AUTHENTICATE = '\terabytesoft\events\user\AuthEvent::BEFORE_AUTHENTICATE';

    /**
     * event is triggered after authenticating user via social network
     * triggered with \terabytesoft\events\user\AuthEvent
     **/
    const AFTER_AUTHENTICATE = '\terabytesoft\events\user\AuthEvent::AFTER_AUTHENTICATE';

    /**
     * event is triggered before connecting social network account to user
     * triggered with \terabytesoft\events\user\AuthEvent
     **/
    const BEFORE_CONNECT = '\terabytesoft\events\user\AuthEvent::BEFORE_CONNECT';

    /**
     * event is triggered before connecting social network account to user
     * triggered with \terabytesoft\events\user\AuthEvent.
     **/
    const AFTER_CONNECT = '\terabytesoft\events\user\AuthEvent::AFTER_CONNECT';

    /**
     * @var object $form
     */
    private $form;

    /**
     * getForm
     */
    public function getForm(): object
    {
        return $this->form;
    }

    /**
     * setForm
     */
    public function setForm(object $form): void
    {
        $this->form = $form;
    }
}
