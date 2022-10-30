Feature: new item
    In order to add item to the database
    As a seller
    I need to enter the item informations and click the "add" submit button

  Scenario: try adding "vase"
    Given I am on "Seller/listings"
    When I click on "add" submit button
    Then I should see a form to fill with "item_id", "item_name", "item_price", "item_description" and "item_image"   
    When I fill out the form properly
    And I click the "create item" submit button
    Then I should see "vase" in my listings

