Feature: setup 2fa 
    In order to setup a 2fa code 
    As a buyer and a seller
    I need to input the 6-digit code and click "Verify code"

  Scenario: try to setup 2fa 
    Given I am logged in
    And I am on "Login/twofasetup"
    And I record the "secret_key"
    And I input my 6-digit code to "current_Code"
    And I click "Verify Code" 
    Then I input the "secret_key"

  
