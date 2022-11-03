<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

        /**
     * @When I get my :num1fa code from my device through google authenticator
     */
     public function iGetMyFaCodeFromMyDeviceThroughGoogleAuthenticator($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I get my :num1fa code from my device through google authenticator` is not defined");
     }

    /**
     * @When I input my username and my code
     */
     public function iInputMyUsernameAndMyCode()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I input my username and my code` is not defined");
     }

    /**
     * @When I click :arg1 submit button
     */
     public function iClickSubmitButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click :arg1 submit button` is not defined");
     }

    /**
     * @Then I should be redirected to :arg1
     */
     public function iShouldBeRedirectedTo($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to :arg1` is not defined");
     }

    /**
     * @When I scan the QR code with my device
     */
     public function iScanTheQRCodeWithMyDevice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I scan the QR code with my device` is not defined");
     }

    /**
     * @Then I should be authenticated
     */
     public function iShouldBeAuthenticated()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be authenticated` is not defined");
     }

    /**
     * @Then I should receive a code through google authenticator
     */
     public function iShouldReceiveACodeThroughGoogleAuthenticator()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should receive a code through google authenticator` is not defined");
     }

    /**
     * @When I input my code
     */
     public function iInputMyCode()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I input my code` is not defined");
     }

    /**
     * @Then I should be able to receive different codes through google authenticator every :num1:num2 seconds
     */
     public function iShouldBeAbleToReceiveDifferentCodesThroughGoogleAuthenticatorEverySeconds($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be able to receive different codes through google authenticator every :num1:num2 seconds` is not defined");
     }

    /**
     * @When I select :arg1
     */
     public function iSelect($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select :arg1` is not defined");
     }

    /**
     * @Then I should see :arg1 in my cart
     */
     public function iShouldSeeInMyCart($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see :arg1 in my cart` is not defined");
     }

    /**
     * @Then I should be able to see :arg1 in my watchlist
     */
     public function iShouldBeAbleToSeeInMyWatchlist($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be able to see :arg1 in my watchlist` is not defined");
     }

    /**
     * @When I click on :arg1 button
     */
     public function iClickOnButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1 button` is not defined");
     }

    /**
     * @Then I should be able to input an amount
     */
     public function iShouldBeAbleToInputAnAmount()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be able to input an amount` is not defined");
     }

    /**
     * @When I click :arg1 button
     */
     public function iClickButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click :arg1 button` is not defined");
     }

    /**
     * @Then I should see all item listings
     */
     public function iShouldSeeAllItemListings()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see all item listings` is not defined");
     }

    /**
     * @Given I have item with $:num1:num2:num2 price in my cart
     */
     public function iHaveItemWithPriceInMyCart($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I have item with $:num1:num2:num2 price in my cart` is not defined");
     }

    /**
     * @Given I have item with $:num1:num2:num2:num2 price
     */
     public function iHaveItemWithPrice($num1, $num2, $num3, $num4)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I have item with $:num1:num2:num2:num2 price` is not defined");
     }

    /**
     * @When I go to checkout process
     */
     public function iGoToCheckoutProcess()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I go to checkout process` is not defined");
     }

    /**
     * @Then I should see that total number of products is :num1
     */
     public function iShouldSeeThatTotalNumberOfProductsIs($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see that total number of products is :num1` is not defined");
     }

    /**
     * @Then my order amount is $:num1:num2:num3:num3
     */
     public function myOrderAmountIs($num1, $num2, $num3, $num4)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my order amount is $:num1:num2:num3:num3` is not defined");
     }

    /**
     * @When I click the :arg1 submit button
     */
     public function iClickTheSubmitButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the :arg1 submit button` is not defined");
     }

    /**
     * @Then I should see my purchase
     */
     public function iShouldSeeMyPurchase()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see my purchase` is not defined");
     }

    /**
     * @Then I should see a listing of all items available to bids and purchase
     */
     public function iShouldSeeAListingOfAllItemsAvailableToBidsAndPurchase()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a listing of all items available to bids and purchase` is not defined");
     }

    /**
     * @Then I should see :arg1
     */
     public function iShouldSee($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see :arg1` is not defined");
     }

    /**
     * @Then I should see a form to fill
     */
     public function iShouldSeeAFormToFill()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a form to fill` is not defined");
     }

    /**
     * @Then the message is sent to the seller's email
     */
     public function theMessageIsSentToTheSellersEmail()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message is sent to the seller's email` is not defined");
     }

    /**
     * @When I click on :arg1 submit button
     */
     public function iClickOnSubmitButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1 submit button` is not defined");
     }

    /**
     * @Then I should see a form to fill with :arg1, :arg2, :arg3, :arg4 and :arg5
     */
     public function iShouldSeeAFormToFillWithAnd($arg1, $arg2, $arg3, $arg4, $arg5)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a form to fill with :arg1, :arg2, :arg3, :arg4 and :arg5` is not defined");
     }

    /**
     * @When I fill out the form properly
     */
     public function iFillOutTheFormProperly()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I fill out the form properly` is not defined");
     }

    /**
     * @Then I should see :arg1 in my listings
     */
     public function iShouldSeeInMyListings($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see :arg1 in my listings` is not defined");
     }

    /**
     * @Then I should not see :arg1 in my cart
     */
     public function iShouldNotSeeInMyCart($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should not see :arg1 in my cart` is not defined");
     }

    /**
     * @When I click :arg1 submit button after :arg2
     */
     public function iClickSubmitButtonAfter($arg1, $arg2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click :arg1 submit button after :arg2` is not defined");
     }

    /**
     * @Then I can not see :arg1
     */
     public function iCanNotSee($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I can not see :arg1` is not defined");
     }

    /**
     * @Then if I click :arg1 submit button
     */
     public function ifIClickSubmitButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `if I click :arg1 submit button` is not defined");
     }

    /**
     * @Then there are existing bids on :arg1
     */
     public function thereAreExistingBidsOn($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `there are existing bids on :arg1` is not defined");
     }

    /**
     * @Then I can still see :arg1
     */
     public function iCanStillSee($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I can still see :arg1` is not defined");
     }

    /**
     * @Then :arg1 is not deleted
     */
     public function isNotDeleted($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `:arg1 is not deleted` is not defined");
     }

    /**
     * @Then I can not see :arg1 in my watchlist
     */
     public function iCanNotSeeInMyWatchlist($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I can not see :arg1 in my watchlist` is not defined");
     }

    /**
     * @Given it is a holiday date
     */
     public function itIsAHolidayDate()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `it is a holiday date` is not defined");
     }

    /**
     * @Then I should see a different homepage background
     */
     public function iShouldSeeADifferentHomepageBackground()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a different homepage background` is not defined");
     }

    /**
     * @Then if it is not a holiday date
     */
     public function ifItIsNotAHolidayDate()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `if it is not a holiday date` is not defined");
     }

    /**
     * @Then I should see the regular homepage background
     */
     public function iShouldSeeTheRegularHomepageBackground()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the regular homepage background` is not defined");
     }

    /**
     * @When I input my username and my password correctly
     */
     public function iInputMyUsernameAndMyPasswordCorrectly()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I input my username and my password correctly` is not defined");
     }

    /**
     * @Then if I input my username and my password incorrectly
     */
     public function ifIInputMyUsernameAndMyPasswordIncorrectly()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `if I input my username and my password incorrectly` is not defined");
     }

    /**
     * @Then I should be see an alert
     */
     public function iShouldBeSeeAnAlert()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be see an alert` is not defined");
     }

    /**
     * @Given I am logged in as a user or seller
     */
     public function iAmLoggedInAsAUserOrSeller()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in as a user or seller` is not defined");
     }

    /**
     * @Then I should see a notication notice on my navigation bar
     */
     public function iShouldSeeANoticationNoticeOnMyNavigationBar()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a notication notice on my navigation bar` is not defined");
     }

    /**
     * @Then if I have new notifications
     */
     public function ifIHaveNewNotifications()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `if I have new notifications` is not defined");
     }

    /**
     * @Then I should see a red exclamation point on top of the icon
     */
     public function iShouldSeeARedExclamationPointOnTopOfTheIcon()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a red exclamation point on top of the icon` is not defined");
     }

    /**
     * @Then if I click the :arg1 icon
     */
     public function ifIClickTheIcon($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `if I click the :arg1 icon` is not defined");
     }

    /**
     * @Then I should see a list of all the recent notifications
     */
     public function iShouldSeeAListOfAllTheRecentNotifications()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a list of all the recent notifications` is not defined");
     }

    /**
     * @Then I should see a pop alert of the lastest feature item
     */
     public function iShouldSeeAPopAlertOfTheLastestFeatureItem()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a pop alert of the lastest feature item` is not defined");
     }

    /**
     * @Then if I click on :arg1 submit button
     */
     public function ifIClickOnSubmitButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `if I click on :arg1 submit button` is not defined");
     }

    /**
     * @Then I should no longer see the pop up
     */
     public function iShouldNoLongerSeeThePopUp()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should no longer see the pop up` is not defined");
     }

    /**
     * @When I input a username and a password
     */
     public function iInputAUsernameAndAPassword()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I input a username and a password` is not defined");
     }

    /**
     * @When I input :arg1 on the search bar
     */
     public function iInputOnTheSearchBar($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I input :arg1 on the search bar` is not defined");
     }

    /**
     * @When I click on the :arg1 icon submit button
     */
     public function iClickOnTheIconSubmitButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the :arg1 icon submit button` is not defined");
     }

    /**
     * @Then I should see all the findings for items having string :arg1 in their name
     */
     public function iShouldSeeAllTheFindingsForItemsHavingStringInTheirName($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see all the findings for items having string :arg1 in their name` is not defined");
     }

    /**
     * @Then I should see all my item listings
     */
     public function iShouldSeeAllMyItemListings()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see all my item listings` is not defined");
     }

    /**
     * @Then I should see the :arg1 and amount paid
     */
     public function iShouldSeeTheAndAmountPaid($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the :arg1 and amount paid` is not defined");
     }

    /**
     * @Then if it is a bid item
     */
     public function ifItIsABidItem()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `if it is a bid item` is not defined");
     }

    /**
     * @Then I should see the bid history with all participating :arg1
     */
     public function iShouldSeeTheBidHistoryWithAllParticipating($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the bid history with all participating :arg1` is not defined");
     }

    /**
     * @Then I should see an option for details
     */
     public function iShouldSeeAnOptionForDetails()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see an option for details` is not defined");
     }

    /**
     * @Then if I click on :arg1
     */
     public function ifIClickOn($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `if I click on :arg1` is not defined");
     }

    /**
     * @Then I should see their listings with :arg1, :arg2, :arg3, :arg4 and :arg5
     */
     public function iShouldSeeTheirListingsWithAnd($arg1, $arg2, $arg3, $arg4, $arg5)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see their listings with :arg1, :arg2, :arg3, :arg4 and :arg5` is not defined");
     }

    /**
     * @Then I should see all my bids with :arg1, :arg2, :arg3, :arg4 and :arg5
     */
     public function iShouldSeeAllMyBidsWithAnd($arg1, $arg2, $arg3, $arg4, $arg5)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see all my bids with :arg1, :arg2, :arg3, :arg4 and :arg5` is not defined");
     }

    /**
     * @Then I should see :arg1, :arg2, :arg3, :arg4 and :arg5
     */
     public function iShouldSeeAnd($arg1, $arg2, $arg3, $arg4, $arg5)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see :arg1, :arg2, :arg3, :arg4 and :arg5` is not defined");
     }

    /**
     * @Then I should see all my purchases
     */
     public function iShouldSeeAllMyPurchases()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see all my purchases` is not defined");
     }

    /**
     * @Then I should see :arg1, :arg2, :arg3, :arg4, :arg5, :arg6 and :arg7 for each purchase
     */
     public function iShouldSeeAndForEachPurchase($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see :arg1, :arg2, :arg3, :arg4, :arg5, :arg6 and :arg7 for each purchase` is not defined");
     }

}
