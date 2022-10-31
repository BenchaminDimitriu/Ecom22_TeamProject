Feature: confirm 2fa 
    In order to confirm my 2fa code 
    As a buyer and a seller
    I need to get my code through my device. Input my username and my code and click "check" submit button.

  Scenario: try to check 2fa 
    Given I am on "Login/check2fa"
    When I get my 2fa code from my device through google authenticator 
    And I input my username and my code
    When I click "check" submit button
    Then I should be redirected to "User/account"

  