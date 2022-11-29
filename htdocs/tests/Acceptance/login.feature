Feature: login
In order to login in my account
As a user
I need to click on the "login"

  Scenario: try to login with correct information
    Given I am on "Login/register"
    When I fill in "username" 
    And I fill in "password"
    And I click "login"
    Then I see "Login/account"

  Scenario: try to login with incorrect information
    Given I am on "Login/index"
    And I fill in "username" 
    And I fill in "password" 
    And I click "login"
    Then I do not see "Login/account"