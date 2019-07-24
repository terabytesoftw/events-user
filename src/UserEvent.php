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
     * event is triggered admin module disable
     * triggered with \terabytesoft\events\user\ADMIN_MODULE_DISABLE
     **/
    const ADMIN_MODULE_DISABLE = '\terabytesoft\events\user\UserEvent::ADMIN_MODULE_DISABLE';

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
     * event is triggered after block fails
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BLOCK_FAILS = '\terabytesoft\events\user\UserEvent::BLOCK_FAILS';

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
     * event is triggered confirm user module is disabled
     * triggered with \terabytesoft\events\user\UserEvent
     */
    const CONFIRM_MODULE_DISABLE = '\terabytesoft\events\user\UserEvent::CONFIRM_MODULE_DISABLE';

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
     * event is triggered confirm new email
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const CONFIRM_NEW_EMAIL = '\terabytesoft\events\user\UserEvent::CONFIRM_NEW_EMAIL';

    /**
     * event is triggered confirm old email
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const CONFIRM_OLD_EMAIL = '\terabytesoft\events\user\UserEvent::CONFIRM_OLD_EMAIL';

    /**
     * event is triggered change email account
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const CHANGE_EMAIL = '\terabytesoft\events\user\UserEvent::CHANGE_EMAIL';

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
     * event is triggered after deleting fails
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const DELETE_FAILS = '\terabytesoft\events\user\UserEvent::DELETE_FAILS';

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
     * event is triggered after impersonating fails
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const IMPERSONATE_FAILS = '\terabytesoft\events\user\UserEvent::IMPERSONATE_FAILS';

    /**
     * event is triggered impersonating module disabled
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const IMPERSONATE_MODULE_DISABLE = '\terabytesoft\events\user\UserEvent::IMPERSONATE_MODULE_DISABLE';

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
     * event is triggered before resend password existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_RESEND_PASSWORD = '\terabytesoft\events\user\UserEvent::BEFORE_RESEND_PASSWORD';

    /**
     * event is triggered after resend password existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_RESEND_PASSWORD = '\terabytesoft\events\user\UserEvent::AFTER_RESEND_PASSWORD';

    /**
     * event is triggered resend password fails existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const RESEND_PASSWORD_FAILS = '\terabytesoft\events\user\UserEvent::RESEND_PASSWORD_FAILS';

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
