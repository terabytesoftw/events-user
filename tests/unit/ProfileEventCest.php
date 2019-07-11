<?php

namespace terabytesoft\events\user\tests;

use terabytesoft\events\user\tests\UnitTester;
use terabytesoft\events\user\tests\_data\controllers\MockController;
use terabytesoft\events\user\ProfileEvent;
use yii\base\Event;

/**
 * Class ProfileEventCest
 *
 * Tests codecept events
 **/
class ProfileEventCest
{
    /**
     * @var Event $event
     */
    private $event;

    /**
     * @var \yii\base\Component $mock
     */
    private $mock;

    /**
     * @var \yii\base\Model $model
     */
    private $model;

    /**
     * _before
     */
    public function _before(UnitTester $I): void
    {
        $this->mock = new MockController();
        $this->model = new \yii\base\Model();
    }

    /**
     * _after
     */
    public function _after(UnitTester $I): void
    {
        unset($this->event);
        unset($this->mock);
        unset($this->model);
    }

    /**
     * testProfileEventUpdate
     */
    public function testProfileEventUpdate(UnitTester $I): void
    {
        Event::on(MockController::class, ProfileEvent::BEFORE_PROFILE_UPDATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ProfileEvent::BEFORE_PROFILE_UPDATE, $event->name);
        });

        Event::on(MockController::class, ProfileEvent::AFTER_PROFILE_UPDATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ProfileEvent::AFTER_PROFILE_UPDATE, $event->name);
        });

        $this->mock->actionUpdateProfile();
    }
}
