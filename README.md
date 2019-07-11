<p align="center">
    <a href="https://github.com/terabytesoftw/events-user" target="_blank">
        <img src="https://lh3.googleusercontent.com/D9TFw1F6ddPuheDc_tpNptTdvTg-FNNpjLSBN14X6Sc-3JDiOxfE67rEh4OZfygonx1tKei2b2DEOHDLjF6T3xl8e-rkEEPZeGqLTWcS_v2cBRlyo0vcZLDHG5ivSDGIWCsenbol=w2400" height="50px;">
    </a>
    <h1 align="center">Events User Core</h1>
</p>

<p align="center">
    <a href="https://packagist.org/packages/terabytesoftw/events-user" target="_blank">
        <img src="https://poser.pugx.org/terabytesoftw/events-user/v/unstable.svg" alt="Unstable Version">
    </a>
    <a href="https://travis-ci.org/terabytesoftw/events-user" target="_blank">
        <img src="https://travis-ci.org/terabytesoftw/events-user.svg?branch=master" alt="Build Status">
    </a>  
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/events-user/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/events-user/badges/build.png?b=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/events-user/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/events-user/badges/coverage.png?b=master" alt="Build Status">
    </a>    
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/events-user/?branch=master" target="_blank">
     	<img src="https://scrutinizer-ci.com/g/terabytesoftw/events-user/badges/quality-score.png?b=master" alt="Code Quality">
    </a>
    <a href="https://scrutinizer-ci.com/code-intelligence" target="_blank">
     	<img src="https://scrutinizer-ci.com/g/terabytesoftw/events-user/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status">
    </a>
    <a href="https://codeclimate.com/github/terabytesoftw/events-user/maintainability" target="_blank">
        <img src="https://api.codeclimate.com/v1/badges/9bbe65b6fda1abd74c2c/maintainability" alt="Maintainability">
    </a>		
</p>

</br>

### **DIRECTORY STRUCTURE:**

```
config/             contains application configurations
src/                contains source files
tests/              contains tests codeception for the web application
vendor/             contains dependent 3rd-party packages
```

### **REQUIREMENTS:**

- The minimum requirement by this project template that your Web server supports:
    - PHP 7.2 or higher.

### **INSTALLATION:**

<p align="justify">
If you do not have <a href="http://getcomposer.org/" title="Composer" target="_blank">Composer</a>, you may install it by following the instructions at <a href="http://getcomposer.org/doc/00-intro.md#installation-nix" title="getcomposer.org" target="_blank">getcomposer.org</a>.
</p>

You can then install this extension using the following command composer:

~~~
composer require terabytesoftw/events-user '^1.0@dev'
~~~

or add composer.json:

~~~
"terabytesoftw/events-user":"^1.0@dev"
~~~

### **USAGE:**

Event Class: UserEvent.php
~~~
<?php

namespace terabytesoft\events\user;

use yii\base\Event;

/**
 * Class UserEvent
 *
 * User events applications
 **/
class UserEvent extends Event
{
    /**
     * event is triggered before blocking existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const BEFORE_BLOCK = '\terabytesoft\events\user\UserEvent::BEFORE_BLOCK';

    /**
     * event is triggered after blocking existing user
     * triggered with \terabytesoft\events\user\UserEvent
     **/
    const AFTER_BLOCK = '\terabytesoft\events\user\UserEvent::AFTER_BLOCK';

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

~~~


Controller/Model: Example
~~~
<?php

Use yii\base\Event

Class MockControler extend controller
{
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
    }
}
~~~

Define actions Event::on in config/events/MockEvents.php
~~~
<?php

Use yii\base\Event

Event::on(MockController::class, UserEvent::BEFORE_BLOCK, function ($event) {
    // Actions here
    // $event->form Model pass
    // $event->name Event Name
});

Event::on(MockController::class, UserEvent::AFTER_BLOCK, function ($event) {
    // Actions here
    // $event->form Model pass
    // $event->name Event Name
});
~~~

Config events composer-plugin: composer.json
~~~
"extra": {
    "config-plugin": {
        "defines": [
            "config/events/MockEvents.php"
        ]
    }
},
~~~

~~~
$composer du
~~~

### **RUN TESTS CODECEPTION:**

~~~
// download all composer dependencies root project
$ composer update --prefer-dist -vvv

// run all tests with code coverage
$ vendor/bin/codecept run unit --coverage-xml
~~~

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **DOCUMENTATION STYLE GUIDE:**

[Style CI Documentation PSR2.](https://docs.styleci.io/presets#psr2)

### **LICENCE:**

[![License](https://poser.pugx.org/terabytesoftw/events-user/license.svg)](LICENSE.md)
[![YiiFramework](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Total Downloads](https://poser.pugx.org/terabytesoftw/events-user/downloads.svg)](https://packagist.org/packages/terabytesoftw/events-user)
[![StyleCI](https://github.styleci.io/repos/196252989/shield?branch=master)](https://github.styleci.io/repos/196252989)
