Feature: edit profile
    In order to edit profile to the database
    As a buyer and seller
    I need to click the "edit profile" 

  Scenario: edit profile for buyer 
    Given I am logged in
    And I am on "Buyer/editProfile"
    And I fill in "buyer_fname", "buyer_lname", "buyer_email"
    And I click "edit profile"
    Then I see "Buyer/profile"

  Scenario: edit profile for seller 
    Given I am logged in
    And I am on "Seller/editProfile"
    And I fill in "seller_fname", "seller_lname", "seller_email"
    And I click "edit profile"
    Then I see "Seller/profile"

  Scenario: edit profile with incorrect information for buyer and seller
    Given I am logged in
    And I am on "Buyer/editProfile" or "Seller/editProfile"
    And I fill do not fill in "buyer_fname", "buyer_lname", "buyer_email" or "seller_fname", "seller_lname", "seller_email" 
    And I click "edit profile"
    Then I do not see "Buyer/profile" or "Seller/profile"

