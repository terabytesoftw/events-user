<?php

namespace terabytesoft\events\user;

use yii\base\Event;

/**
 * Class ConnectEvent
 *
 * Connect events applications
 **/
class ConnectEvent extends Event
{
    /**
     * event is triggered before connecting user to social account
     * triggered with \terabytesoft\events\user\ConnectEvent
     **/
    const BEFORE_CONNECT = '\terabytesoft\events\user\ConnectEvent::BEFORE_CONNECT';
    /**
     * event is triggered after connecting user to social account
     * triggered with \terabytesoft\events\user\ConnectEvent
     */
    const AFTER_CONNECT = '\terabytesoft\events\user\ConnectEvent::AFTER_CONNECT';

    /**
     * event is triggered before disconnecting social account from user
     * triggered with \terabytesoft\events\user\ConnectEvent
     */
    const BEFORE_DISCONNECT = '\terabytesoft\events\user\ConnectEvent::BEFORE_DISCONNECT';

    /**
     * event is triggered after disconnecting social account from user
     * triggered with \terabytesoft\events\user\ConnectEvent
     */
    const AFTER_DISCONNECT = '\terabytesoft\events\user\ConnectEvent::AFTER_DISCONNECT';

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
