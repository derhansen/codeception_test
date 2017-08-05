<?php
class FirstCest
{
    public function mainPageShowsExpectedMessage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Welcome to a default website made with TYPO3');
    }
}