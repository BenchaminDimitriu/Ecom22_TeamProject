Feature: add item to cart
    In order to add an item to cart
    As a buyer
    I need to click "add to cart" 

  Scenario: try adding "vase"
    Given I am logged in
    And I am on "Main/catalogue"
    And I click "add" on "vase"
    Then I see "vase" in my cart 

