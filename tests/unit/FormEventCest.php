<?php

namespace terabytesoft\events\user\tests;

use terabytesoft\events\user\tests\UnitTester;
use terabytesoft\events\user\tests\_data\controllers\MockController;
use terabytesoft\events\user\FormEvent;
use yii\base\Event;

/**
 * Class FormEventCest
 *
 * Tests codecept events
 **/
class FormEventCest
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
     * testFormEventAccount
     */
    public function testFormEventAccount(UnitTester $I): void
    {
        Event::on(MockController::class, FormEvent::BEFORE_ACCOUNT_UPDATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::BEFORE_ACCOUNT_UPDATE, $event->name);
        });

        Event::on(MockController::class, FormEvent::AFTER_ACCOUNT_UPDATE, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::AFTER_ACCOUNT_UPDATE, $event->name);
        });

        $this->mock->actionAccount();
    }

    /**
     * testFormEventLogin
     */
    public function testFormEventLogin(UnitTester $I): void
    {
        Event::on(MockController::class, FormEvent::BEFORE_LOGIN, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::BEFORE_LOGIN, $event->name);
        });

        Event::on(MockController::class, FormEvent::AFTER_LOGIN, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::AFTER_LOGIN, $event->name);
        });

        $this->mock->actionLogin();
    }

    /**
     * testFormEventLogout
     */
    public function testFormEventLogout(UnitTester $I): void
    {
        Event::on(MockController::class, FormEvent::BEFORE_LOGOUT, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::BEFORE_LOGOUT, $event->name);
        });

        Event::on(MockController::class, FormEvent::AFTER_LOGOUT, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::AFTER_LOGOUT, $event->name);
        });

        $this->mock->actionLogout();
    }

    /**
     * testFormEventRequest
     */
    public function testFormEventRequest(UnitTester $I): void
    {
        Event::on(MockController::class, FormEvent::BEFORE_REQUEST, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::BEFORE_REQUEST, $event->name);
        });

        Event::on(MockController::class, FormEvent::AFTER_REQUEST, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::AFTER_REQUEST, $event->name);
        });

        Event::on(MockController::class, FormEvent::REQUEST_FAILS, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::REQUEST_FAILS, $event->name);
        });

        $this->mock->actionRequest();
    }

    /**
     * testFormEventRegister
     */
    public function testFormEventRegister(UnitTester $I): void
    {
        Event::on(MockController::class, FormEvent::BEFORE_REGISTER, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::BEFORE_REGISTER, $event->name);
        });

        Event::on(MockController::class, FormEvent::AFTER_REGISTER, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::AFTER_REGISTER, $event->name);
        });

        Event::on(MockController::class, FormEvent::REGISTER_FAILS, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::REGISTER_FAILS, $event->name);
        });

        $this->mock->actionRegister();
    }

    /**
     * testFormEventResend
     */
    public function testFormEventResend(UnitTester $I): void
    {
        Event::on(MockController::class, FormEvent::BEFORE_RESEND, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::BEFORE_RESEND, $event->name);
        });

        Event::on(MockController::class, FormEvent::AFTER_RESEND, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::AFTER_RESEND, $event->name);
        });

        Event::on(MockController::class, FormEvent::RESEND_FAILS, function ($event) {
            \PHPUnit_Framework_Assert::assertEquals($this->model, $event->form);
            \PHPUnit_Framework_Assert::assertEquals(FormEvent::RESEND_FAILS, $event->name);
        });

        $this->mock->actionResend();
    }
}
