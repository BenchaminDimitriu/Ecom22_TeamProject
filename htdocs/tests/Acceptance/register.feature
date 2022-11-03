Feature: register
In order to register a new account
As a user
I need to click the "register" 

Scenario: try to register user "user"
  Given I am on "Login/register"
  When I fill in "username" with "newUser"
  And I fill in "password" with "newPassword"
  And I click "register"
  And I fill in "username" with "newUser"
  And I fill in "password" with "newPassword"
  And I click "login"
  Then I see "Welcome newUser"