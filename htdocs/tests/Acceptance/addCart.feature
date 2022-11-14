Feature: add item to cart
    In order to add an item to cart
    As a buyer
    I need to click the "add" 

  Scenario: try adding "vase"
    Given I am logged in
    And I am on "Main/index"
    And I click "add" on "vase"
    Then I see "vase" in my cart 

