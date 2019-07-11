<?php

namespace terabytesoft\events\user\tests\_data\controllers;

use terabytesoft\events\user\AuthEvent;
use terabytesoft\events\user\ConnectEvent;
use terabytesoft\events\user\FormEvent;
use terabytesoft\events\user\ProfileEvent;
use terabytesoft\events\user\ResetPasswordEvent;
use terabytesoft\events\user\UserEvent;
use yii\base\Component;
use yii\base\Event;
use yii\base\Model;

/**
 * Class MockController
 *
 * Tests codecept events MockController
 **/
class MockController extends Component
{
    private $event;

    private $model;

    /**
     * __construcc
     */
    public function __construct()
    {
        $this->model = new Model();
    }

    /**
     * actionAccount
     */
    public function actionAccount(): void
    {
        $this->event = new FormEvent([
            'form' => $this->model,
        ]);

        $this->trigger(FormEvent::BEFORE_ACCOUNT_UPDATE, $this->event);
        $this->trigger(FormEvent::AFTER_ACCOUNT_UPDATE, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionBlock
     */
    public function actionBlock(): void
    {
        $this->event = new UserEvent([
            'form' => $this->model,
        ]);

        $this->trigger(UserEvent::BEFORE_BLOCK, $this->event);
        $this->trigger(UserEvent::AFTER_BLOCK, $this->event);

        $this->trigger(UserEvent::BEFORE_UNBLOCK, $this->event);
        $this->trigger(UserEvent::AFTER_UNBLOCK, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionConnect
     */
    public function actionConnect(): void
    {
        $this->event = new ConnectEvent([
            'form' => $this->model,
        ]);

        $this->trigger(ConnectEvent::BEFORE_CONNECT, $this->event);
        $this->trigger(ConnectEvent::AFTER_CONNECT, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionConfirm
     */
    public function actionConfirm(): void
    {
        $this->event = new UserEvent([
            'form' => $this->model,
        ]);

        $this->trigger(UserEvent::BEFORE_CONFIRM, $this->event);
        $this->trigger(UserEvent::AFTER_CONFIRM, $this->event);
        $this->trigger(UserEvent::CONFIRM_FAILS, $this->event);
        $this->trigger(UserEvent::CONFIRM_TOKEN_FAILS, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionCreate
     */
    public function actionCreate()
    {
        $this->event = new UserEvent([
            'form' => $this->model,
        ]);

        $this->trigger(UserEvent::BEFORE_CREATE, $this->event);
        $this->trigger(UserEvent::AFTER_CREATE, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionDelete
     */
    public function actionDelete(): void
    {
        $this->event = new UserEvent([
            'form' => $this->model,
        ]);

        $this->trigger(UserEvent::BEFORE_DELETE, $this->event);
        $this->trigger(UserEvent::AFTER_DELETE, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionLogin
     */
    public function actionLogin(): void
    {
        $this->event = new FormEvent([
            'form' => $this->model,
        ]);

        $this->trigger(FormEvent::BEFORE_LOGIN, $this->event);
        $this->trigger(FormEvent::AFTER_LOGIN, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionLogout
     */
    public function actionLogout(): void
    {
        $this->event = new FormEvent([
            'form' => $this->model,
        ]);

        $this->trigger(FormEvent::BEFORE_LOGOUT, $this->event);
        $this->trigger(FormEvent::AFTER_LOGOUT, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionRequest
     */
    public function actionRequest(): void
    {
        $this->event = new FormEvent([
            'form' => $this->model,
        ]);

        $this->trigger(FormEvent::BEFORE_REQUEST, $this->event);
        $this->trigger(FormEvent::AFTER_REQUEST, $this->event);
        $this->trigger(FormEvent::REQUEST_FAILS, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionRegister
     */
    public function actionRegister(): void
    {
        $this->event = new FormEvent([
            'form' => $this->model,
        ]);

        $this->trigger(FormEvent::BEFORE_REGISTER, $this->event);
        $this->trigger(FormEvent::AFTER_REGISTER, $this->event);
        $this->trigger(FormEvent::REGISTER_FAILS, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionResend
     */
    public function actionResend(): void
    {
        $this->event = new FormEvent([
            'form' => $this->model,
        ]);

        $this->trigger(FormEvent::BEFORE_RESEND, $this->event);
        $this->trigger(FormEvent::AFTER_RESEND, $this->event);
        $this->trigger(FormEvent::RESEND_FAILS, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionReset
     */
    public function actionReset(): void
    {
        $this->event = new ResetPasswordEvent([
            'form' => $this->model,
        ]);

        $this->trigger(ResetPasswordEvent::BEFORE_TOKEN_VALIDATE, $this->event);
        $this->trigger(ResetPasswordEvent::AFTER_TOKEN_VALIDATE, $this->event);
        $this->trigger(ResetPasswordEvent::TOKEN_FAILS, $this->event);

        $this->trigger(ResetPasswordEvent::BEFORE_RESET, $this->event);
        $this->trigger(ResetPasswordEvent::AFTER_RESET, $this->event);
        $this->trigger(ResetPasswordEvent::RESET_FAILS, $this->event);
        unset($event);
        unset($model);
    }

    /**
     * actionSwitch
     */
    public function actionSwitch(): void
    {
        $this->event = new UserEvent([
            'form' => $this->model,
        ]);

        $this->trigger(UserEvent::BEFORE_IMPERSONATE, $this->event);
        $this->trigger(UserEvent::AFTER_IMPERSONATE, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionUpdate
     */
    public function actionUpdate(): void
    {
        $this->event = new UserEvent([
            'form' => $this->model,
        ]);

        $this->trigger(UserEvent::BEFORE_UPDATE, $this->event);
        $this->trigger(UserEvent::AFTER_UPDATE, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * actionUpdateProfile
     */
    public function actionUpdateProfile(): void
    {
        $this->event = new ProfileEvent([
            'form' => $this->model,
        ]);

        $this->trigger(ProfileEvent::AFTER_PROFILE_UPDATE, $this->event);
        $this->trigger(ProfileEvent::BEFORE_PROFILE_UPDATE, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * authenticate
     */
    public function authenticate(): void
    {
        $this->event = new AuthEvent([
            'form' => $this->model,
        ]);

        $this->trigger(AuthEvent::BEFORE_AUTHENTICATE, $this->event);
        $this->trigger(AuthEvent::AFTER_AUTHENTICATE, $this->event);

        unset($event);
        unset($model);
    }

    /**
     * create
     */
    public function create(): void
    {
    }

    /**
     * connect
     */
    public function connect(): void
    {
        $this->event = new AuthEvent([
            'form' => $this->model,
        ]);

        $this->trigger(AuthEvent::BEFORE_CONNECT, $this->event);
        $this->trigger(AuthEvent::AFTER_CONNECT, $this->event);

        unset($event);
        unset($model);
    }
}
