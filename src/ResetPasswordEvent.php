<?php

namespace terabytesoft\events\user;

use yii\base\Event;
use yii\base\Model;

/**
 * Class ResetPasswordEvent
 *
 * ResetPassword events applications
 **/
class ResetPasswordEvent extends Event
{
    /**
     * event is triggered before validating recovery token
     * triggered with \terabytesoft\events\user\ResetPasswordEvent. May not have $form property set
     **/
    const BEFORE_TOKEN_VALIDATE = '\terabytesoft\events\user\ResetPasswordEvent::BEFORE_TOKEN_VALIDATE';

    /**
     * event is triggered after validating recovery token
     * triggered with \terabytesoft\events\user\ResetPasswordEvent. May not have $form property set
     **/
    const AFTER_TOKEN_VALIDATE = '\terabytesoft\events\user\ResetPasswordEvent::AFTER_TOKEN_VALIDATE';

    /**
     * event is triggered token fails recovery token
     * triggered with \terabytesoft\events\user\ResetPasswordEvent. May not have $form property set
     **/
    const TOKEN_FAILS = '\terabytesoft\events\user\ResetPasswordEvent::TOKEN_FAILS';

    /**
     * event is triggered before resetting password
     * triggered with \terabytesoft\events\user\ResetPasswordEvent
     **/
    const BEFORE_RESET = '\terabytesoft\events\user\ResetPasswordEvent::BEFORE_RESET';

    /**
     * event is triggered after resetting password
     * triggered with \terabytesoft\events\user\ResetPasswordEvent
     **/
    const AFTER_RESET = '\terabytesoft\events\user\ResetPasswordEvent::AFTER_RESET';

    /**
     * event is triggered fails resetting password
     * triggered with \terabytesoft\events\user\ResetPasswordEvent
     **/
    const RESET_FAILS = '\terabytesoft\events\user\ResetPasswordEvent::RESET_FAILS';

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
     * @param Model $form
     */
    public function setForm(object $form): void
    {
        $this->form = $form;
    }
}
