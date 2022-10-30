Feature: delete item from cart
    In order to delete an item from cart
    As a buyer
    I need to select the item and click the "delete" submit button

  Scenario: try adding "vase"
    Given I am on "Buyer/cart"
    When I select "vase" 
    And I click "delete" submit button
    Then I should not see "vase" in my cart 

