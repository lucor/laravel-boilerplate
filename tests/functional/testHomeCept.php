<?php
$I = new TestGuy($scenario);
$I->wantTo('check home page');
$I->amOnPage('/');
$I->see('Starter template', 'h1');