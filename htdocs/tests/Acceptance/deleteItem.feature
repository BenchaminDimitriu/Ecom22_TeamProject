Feature: delete item
    In order to delete items
    As a seller 
    I need to click on the "delete" 

  Scenario: try to delete "vase"
    Given I am logged in
    And I am on "Seller/listings" 
    And I click "delete" on "vase"
    Then I do not see "vase" 

  

