Feature: login
    In order to login
    As a buyer and a seller
    I need to enter my username and my password. Click the "login" submit button. 

  Scenario: try login in
    Given I am on "http://localhost/login"
    When I input my username and my password correctly
    And I click "login" submit button
    Then I should be redirected to "Login/check2fa"
    But if I input my username and my password incorrectly
    And I click "login" submit button
    Then I should be see an alert 
