Feature: login
In order to login in my account
As a user
I need to click on the "login"

  Scenario: try to login with correct information
    Given I am on "Login/register"
    When I fill in "username" with "newUser"
    And I fill in "password" with "newPassword"
    And I click "register"
    And I fill in "username" with "newUser"
    And I fill in "password" with "newPassword"
    And I click "login"
    Then I see "Welcome newUser"

  Scenario: try to login with incorrect information
    Given I am on "Login/index"
    And I fill in "username" with "newUser" 
    And I fill in "password" with "newPassword" 
    And I click "login"
    Then I do not see "Welcome newUser"