<?php

namespace terabytesoft\events\user\tests;

use terabytesoft\events\user\tests\UnitTester;
use terabytesoft\events\user\tests\_data\controllers\MockController;
use terabytesoft\events\user\UserEvent;
use yii\base\Event;

/**
 * Class UserEventCest
 *
 * Tests codecept events
 **/
class UserEventCest
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
     * testUserEventBlock
     */
    public function testUserEventBlock(UnitTester $I): void
    {
        Event::on(MockController::class, UserEvent::BEFORE_BLOCK, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::BEFORE_BLOCK, $event->name);
        });

        Event::on(MockController::class, UserEvent::AFTER_BLOCK, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::AFTER_BLOCK, $event->name);
        });

        Event::on(MockController::class, UserEvent::BEFORE_UNBLOCK, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::BEFORE_UNBLOCK, $event->name);
        });

        Event::on(MockController::class, UserEvent::AFTER_UNBLOCK, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::AFTER_UNBLOCK, $event->name);
        });

        $this->mock->actionBlock();
    }

    /**
     * testUserEventConfirm
     */
    public function testUserEventConfirm(UnitTester $I): void
    {
        Event::on(MockController::class, UserEvent::BEFORE_CONFIRM, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::BEFORE_CONFIRM, $event->name);
        });

        Event::on(MockController::class, UserEvent::AFTER_CONFIRM, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::AFTER_CONFIRM, $event->name);
        });

        Event::on(MockController::class, UserEvent::CONFIRM_FAILS, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::CONFIRM_FAILS, $event->name);
        });

        Event::on(MockController::class, UserEvent::CONFIRM_TOKEN_FAILS, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::CONFIRM_TOKEN_FAILS, $event->name);
        });

        $this->mock->actionConfirm();
    }

    /**
     * testUserEventCreate
     */
    public function testUserEventCreate(UnitTester $I): void
    {
        Event::on(MockController::class, UserEvent::BEFORE_CREATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::BEFORE_CREATE, $event->name);
        });

        Event::on(MockController::class, UserEvent::AFTER_CREATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::AFTER_CREATE, $event->name);
        });

        $this->mock->actionCreate();
    }

    /**
     * testUserEventDelete
     */
    public function testUserEventDelete(UnitTester $I): void
    {
        Event::on(MockController::class, UserEvent::BEFORE_DELETE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::BEFORE_DELETE, $event->name);
        });

        Event::on(MockController::class, UserEvent::AFTER_DELETE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::AFTER_DELETE, $event->name);
        });

        $this->mock->actionDelete();
    }

    /**
     * testUserEventImpersonate
     */
    public function testUserEventImpersonate(UnitTester $I): void
    {
        Event::on(MockController::class, UserEvent::BEFORE_IMPERSONATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::BEFORE_IMPERSONATE, $event->name);
        });

        Event::on(MockController::class, UserEvent::AFTER_IMPERSONATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::AFTER_IMPERSONATE, $event->name);
        });

        $this->mock->actionSwitch();
    }

    /**
     * testUserEventUpdate
     */
    public function testUserEventUpdate(UnitTester $I): void
    {
        Event::on(MockController::class, UserEvent::BEFORE_UPDATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::BEFORE_UPDATE, $event->name);
        });

        Event::on(MockController::class, UserEvent::AFTER_UPDATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(UserEvent::AFTER_UPDATE, $event->name);
        });

        $this->mock->actionUpdate();
    }
}
