<?php

namespace terabytesoft\events\user;

use yii\base\Event;

/**
 * Class UserEvent
 *
 * User events applications
 **/
class UserEvent extends Event
{
    /**
     * event is triggered before blocking existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_BLOCK = '\terabytesoft\events\user\UserEvent::BEFORE_BLOCK';

    /**
     * event is triggered after blocking existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_BLOCK = '\terabytesoft\events\user\UserEvent::AFTER_BLOCK';

    /**
     * event is triggered before confirming user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_CONFIRM = '\terabytesoft\events\user\UserEvent::BEFORE_CONFIRM';

    /**
     * event is triggered before confirming user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_CONFIRM = '\terabytesoft\events\user\UserEvent::AFTER_CONFIRM';

    /**
     * event is triggered fails confirming user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const CONFIRM_FAILS = '\terabytesoft\events\user\UserEvent::CONFIRM_FAILS';

    /**
     * event is triggered token fails confirming user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const CONFIRM_TOKEN_FAILS = '\terabytesoft\events\user\UserEvent::CONFIRM_TOKEN_FAILS';

    /**
     * event is triggered before creating new user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_CREATE = '\terabytesoft\events\user\UserEvent::BEFORE_CREATE';

    /**
     * event is triggered after creating new user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_CREATE = '\terabytesoft\events\user\UserEvent::AFTER_CREATE';

    /**
     * event is triggered before deleting existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_DELETE = '\terabytesoft\events\user\UserEvent::BEFORE_DELETE';

    /**
     * event is triggered after deleting existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_DELETE = '\terabytesoft\events\user\UserEvent::AFTER_DELETE';

    /**
     * event is triggered before impersonating as another user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_IMPERSONATE = '\terabytesoft\events\user\UserEvent::BEFORE_IMPERSONATE';

    /**
     * event is triggered after impersonating as another user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_IMPERSONATE = '\terabytesoft\events\user\UserEvent::AFTER_IMPERSONATE';

    /**
     * event is triggered before updating existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_UPDATE = '\terabytesoft\events\user\UserEvent::BEFORE_UPDATE';

    /**
     * event is triggered after updating existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_UPDATE = '\terabytesoft\events\user\UserEvent::AFTER_UPDATE';

    /**
     * event is triggered before unblocking existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_UNBLOCK = '\terabytesoft\events\user\UserEvent::BEFORE_UNBLOCK';

    /**
     * event is triggered after unblocking existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_UNBLOCK = '\terabytesoft\events\user\UserEvent::AFTER_UNBLOCK';

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
