Feature: register
In order to register a new account
As a user
I need to click the "register" 

Scenario: try to register user "user"
  Given I am on "Login/register"
  When I fill in "username"
  And I fill in "password" 
  And I click "register"
  Then I see "Login/login"