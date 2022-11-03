Feature: delete from watchlist
    In order to delete saved items 
    As a buyer
    I need to click "delete" 

  Scenario: try to delete "vase" from watchlist
    Given I am logged in
    And I am on  "Buyer/watchlist"
    And I click "delete" on "vase"
    Then I do not see "vase" 
