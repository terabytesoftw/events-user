<?php

namespace terabytesoft\events\user;

use yii\base\Event;

/**
 * Class ProfileEvent
 *
 * Profile events applications
 **/
class ProfileEvent extends Event
{
    /**
     * event is triggered before updating existing user's profile
     * triggered with \terabytesoft\events\user\ProfileEvent
     **/
    const BEFORE_PROFILE_UPDATE = '\terabytesoft\events\user\ProfileEvent::BEFORE_PROFILE_UPDATE';

    /**
     * event is triggered after updating existing user's profile
     * triggered with \terabytesoft\events\user\ProfileEvent
     **/
    const AFTER_PROFILE_UPDATE = '\terabytesoft\events\user\ProfileEvent::AFTER_PROFILE_UPDATE';

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
