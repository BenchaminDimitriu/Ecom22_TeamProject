Feature: setup 2fa 
    In order to setup a 2fa code 
    As a buyer and a seller
    I need to scan the QR code with my device and input the code. Click "Verify code" submit button.

  Scenario: try to setup 2fa 
    Given I am on "User/twofasetup"
    When I scan the QR code with my device
    Then I should be authenticated 
    And I should receive a code through google authenticator 
    When I input my code
    And I click "Verify Code" submit button
    Then I should be able to receive different codes through google authenticator every 30 seconds