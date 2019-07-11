<?php

namespace terabytesoft\events\user\tests;

use terabytesoft\events\user\tests\UnitTester;
use terabytesoft\events\user\tests\_data\controllers\MockController;
use terabytesoft\events\user\ConnectEvent;
use yii\base\Event;

/**
 * Class ConnectEventCest
 *
 * Tests codecept events
 **/
class ConnectEventCest
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
     * testConnectEventConnect
     */
    public function testConnectEventConnect(UnitTester $I): void
    {
        Event::on(MockController::class, ConnectEvent::BEFORE_CONNECT, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ConnectEvent::BEFORE_CONNECT, $event->name);
        });

        Event::on(MockController::class, ConnectEvent::AFTER_CONNECT, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(ConnectEvent::AFTER_CONNECT, $event->name);
        });

        $this->mock->actionConnect();
    }
}
