Feature: confirm 2fa 
    In order to confirm my 2fa code 
    As a buyer and a seller
    I need to input my username and my code and click "Check"

  Scenario: try to check 2fa correctly
      Given I am logged in
      And I am on "Login/check2fa"
      When I record the "secret_key"
      And I input the 6-digit code to "currentcode"
      And I click "Check"
      Then I see "Buyer/createProfile" or "Seller/createProfile"

  Scenario: try to check 2fa incorrectly
      Given I am logged in
      And I am on "Login/check2fa"
      When I record the "secret_key"
      And I input the 6-digit code to "currentcode" 
      And I click "check"
      Then I should not see "Buyer/createProfile" or "Seller/createProfile"