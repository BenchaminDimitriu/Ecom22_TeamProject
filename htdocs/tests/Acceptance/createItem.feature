Feature: new item
    In order to add item to the database
    As a seller
    I need to click the "add" 

  Scenario: try adding "vase"
    Given I am logged in
    And I am on "Seller/listings"
    And I click on "add" 
    And I fill in item_name" with "newItemname", "item_price" with "newItemPrice", "item_description" with "newItemDescription" and "item_image" with "newItemImage"   
    And I click "create item"
    Then I see "vase"

  Scenario: try adding "vase" with incorrect information 
    Given I am logged in
    And I am on "Seller/listings"
    And I click on "add" 
    And I fill in "item_name" with "newItemName", "item_price" with "newItemPrice", "item_description" with "newItemDescription" and "item_image" with "newItemImage"   
    And I click "create item"
    Then I do not see "vase"

