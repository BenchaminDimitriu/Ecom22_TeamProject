Feature: add item to cart
    In order to add an item to cart
    As a buyer
    I need to select the item and click the "add" submit button

  Scenario: try adding "vase"
    Given I am on "Main/index"
    When I select "vase" 
    And I click "add" submit button
    Then I should see "vase" in my cart 

