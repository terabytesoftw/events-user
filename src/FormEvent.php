<?php

namespace terabytesoft\events\user;

use yii\base\Event;

/**
 * Class FormEvent
 *
 * Form events applications
 **/
class FormEvent extends Event
{
    /**
     * event is triggered after creating RegistrationForm class
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const BEFORE_REGISTER = '\terabytesoft\events\user\FormEvent::BEFORE_REGISTER';

    /**
     * event is triggered after successful registration Form class
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const AFTER_REGISTER = '\terabytesoft\events\user\FormEvent::AFTER_REGISTER';

    /**
     * event is triggered fails registration Form class
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const REGISTER_FAILS = '\terabytesoft\events\user\FormEvent::REGISTER_FAILS';

    /**
     * event is triggered module registration user is disable
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const REGISTER_MODULE_DISABLE = '\terabytesoft\events\user\FormEvent::REGISTER_MODULE_DISABLE';

    /**
     * event is triggered after creating ResendForm class
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const BEFORE_RESEND = '\terabytesoft\events\user\FormEvent::BEFORE_RESEND';

    /**
     * event is triggered after successful resending of confirmation email
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const AFTER_RESEND = '\terabytesoft\events\user\FormEvent::AFTER_RESEND';

    /**
     * event is triggered fails resending of confirmation email
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const RESEND_FAILS = '\terabytesoft\events\user\FormEvent::RESEND_FAILS';

    /**
     * event is triggered before logging user in
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const BEFORE_LOGIN = '\terabytesoft\events\user\FormEvent::BEFORE_LOGIN';

    /**
     * event is triggered after logging user in
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const AFTER_LOGIN = '\terabytesoft\events\user\FormEvent::AFTER_LOGIN';

    /**
     * event is triggered before logging user out
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_LOGOUT = '\terabytesoft\events\user\FormEvent::BEFORE_LOGOUT';

    /**
     * event is triggered after logging user out
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_LOGOUT = '\terabytesoft\events\user\FormEvent::AFTER_LOGOUT';

    /**
     * event is triggered before requesting password reset
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const BEFORE_REQUEST = '\terabytesoft\events\user\FormEvent::BEFORE_REQUEST';

    /**
     * event is triggered after requesting password reset
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const AFTER_REQUEST = '\terabytesoft\events\user\FormEvent::AFTER_REQUEST';

    /**
     * event is triggered requesting password is module disabled
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const REQUEST_MODULE_DISABLE = '\terabytesoft\events\user\FormEvent::REQUEST_MODULE_DISABLE';

    /**
     * event is triggered fails requesting password reset
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const REQUEST_FAILS = '\terabytesoft\events\user\FormEvent::REQUEST_FAILS';

    /**
     * event is triggered before updating user's account settings
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const BEFORE_ACCOUNT_UPDATE = '\terabytesoft\events\user\FormEvent::BEFORE_ACCOUNT_UPDATE';

    /**
     * event is triggered after updating user's account settings
     * triggered with \terabytesoft\events\user\FormEvent
     **/
    const AFTER_ACCOUNT_UPDATE = '\terabytesoft\events\user\FormEvent::AFTER_ACCOUNT_UPDATE';

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
