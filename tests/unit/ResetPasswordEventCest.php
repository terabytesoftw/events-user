<?php

namespace terabytesoft\events\user\tests;

use terabytesoft\events\user\tests\UnitTester;
use terabytesoft\events\user\tests\_data\controllers\MockController;
use terabytesoft\events\user\ResetPasswordEvent;
use yii\base\Event;

/**
 * Class ResetPasswordEventCest
 *
 * Tests codecept events
 **/
class ResetPasswordEventCest
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
     * testResetPasswordEventTokenValidate
     */
    public function testResetPasswordEventTokenValidate(UnitTester $I): void
    {
        Event::on(MockController::class, ResetPasswordEvent::BEFORE_TOKEN_VALIDATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ResetPasswordEvent::BEFORE_TOKEN_VALIDATE, $event->name);
        });

        Event::on(MockController::class, ResetPasswordEvent::AFTER_TOKEN_VALIDATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ResetPasswordEvent::AFTER_TOKEN_VALIDATE, $event->name);
        });

        Event::on(MockController::class, ResetPasswordEvent::TOKEN_FAILS, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ResetPasswordEvent::TOKEN_FAILS, $event->name);
        });

        Event::on(MockController::class, ResetPasswordEvent::BEFORE_RESET, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ResetPasswordEvent::BEFORE_RESET, $event->name);
        });

        Event::on(MockController::class, ResetPasswordEvent::AFTER_RESET, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ResetPasswordEvent::AFTER_RESET, $event->name);
        });

        Event::on(MockController::class, ResetPasswordEvent::RESET_FAILS, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ResetPasswordEvent::RESET_FAILS, $event->name);
        });

        $this->mock->actionReset();
    }
}
