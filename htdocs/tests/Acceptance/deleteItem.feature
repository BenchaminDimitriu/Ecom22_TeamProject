Feature: delete item
    In order to delete items
    As a seller 
    I need to click on the "delete" submit button next to the item to delete

  Scenario: try to delete "vase"
    Given I am on "Seller/listings"
    When I click "delete" submit button after "vase"
    Then I can not see "vase"
    But if I click "delete" submit button 
    And there are existing bids on "vase"
    Then I can still see "vase" 
    And "vase" is not deleted 

