Feature: add item
    In order to add item to the database
    As a seller
    I need to click the "add" 

  Scenario: try adding "vase"
    Given I am logged in
    And I am on "Seller/listings"
    And I click on "add item" 
    And I fill in "item_name", "item_price", "item_description" and "item_image" 
    And I click "add new item"
    Then I see "vase"

  Scenario: try adding "vase" with incorrect information 
    Given I am logged in
    And I am on "Seller/listings"
    And I click on "add" 
    And I fill in item_name", "item_price", "item_description" and "item_image"   
    And I click "add new item"
    Then I do not see "vase"

