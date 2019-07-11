<?php

namespace terabytesoft\events\user\tests;

use terabytesoft\events\user\tests\UnitTester;
use terabytesoft\events\user\tests\_data\controllers\MockController;
use terabytesoft\events\user\AuthEvent;
use yii\base\Event;

/**
 * Class AuthEventCest
 *
 * Tests codecept events
 **/
class AuthEventCest
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
     * testAuthEventAuthenticate
     */
    public function testAuthEventAuthenticate(UnitTester $I): void
    {
        Event::on(MockController::class, AuthEvent::BEFORE_AUTHENTICATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(AuthEvent::BEFORE_AUTHENTICATE, $event->name);
        });

        Event::on(MockController::class, AuthEvent::AFTER_AUTHENTICATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(AuthEvent::AFTER_AUTHENTICATE, $event->name);
        });

        $this->mock->authenticate();
    }

    /**
     * testAuthEventConnect
     */
    public function testAuthEventConnect(UnitTester $I): void
    {
        Event::on(MockController::class, AuthEvent::BEFORE_CONNECT, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(AuthEvent::BEFORE_CONNECT, $event->name);
        });

        Event::on(MockController::class, AuthEvent::AFTER_CONNECT, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(AuthEvent::AFTER_CONNECT, $event->name);
        });

        $this->mock->connect();
    }
}
