Feature: delete item from cart
    In order to delete an item from cart
    As a buyer
    I need to click the "delete"

  Scenario: try deleting "vase"
    Given I am logged in
    And I am on "Buyer/cart" 
    And I click "delete" on "vase"
    Then I do not see "vase" 
