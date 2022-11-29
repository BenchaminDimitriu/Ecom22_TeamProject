Feature: edit item
    In order to edit item to the database
    As a seller
    I need to click the "edit" 

  Scenario: try adding "vase"
    Given I am logged in
    And I am on "Seller/listings"
    And I click on "edit" 
    And I fill in "item_name", "item_price", "item_description" and "item_image" 
    And I click "edit"
    Then I see "vase"

