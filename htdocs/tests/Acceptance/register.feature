Feature: register
    In order to register
    As a buyer and a seller
    I need to enter a username and a password. Click the "register" submit button. 

  Scenario: try to register
    Given I am on "Login/register"
    When I input a username and a password 
    And I click "register" submit button
    Then I should be redirected to "Login/twofasetup"
  