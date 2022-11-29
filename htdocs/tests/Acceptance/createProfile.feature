Feature: create profile
    In order to add profile to the database
    As a buyer and seller
    I need to click the "create profile" 

  Scenario: create profile for buyer 
    Given I am logged in
    And I am on "Buyer/createProfile"
    And I fill in "buyer_fname", "buyer_lname", "buyer_email"
    And I click "create profile"
    Then I see "Buyer/profile"

  Scenario: create profile for seller 
    Given I am logged in
    And I am on "Seller/createProfile"
    And I fill in "seller_fname", "seller_lname", "seller_email"
    And I click "create profile"
    Then I see "Seller/profile"

  Scenario: create profile with incorrect information for buyer and seller
    Given I am logged in
    And I am on "Buyer/createProfile" or "Seller/createProfile"
    And I fill do not fill in "buyer_fname", "buyer_lname", "buyer_email" or "seller_fname", "seller_lname", "seller_email" 
    And I click "create profile"
    Then I do not see "Buyer/profile" or "Seller/profile"

