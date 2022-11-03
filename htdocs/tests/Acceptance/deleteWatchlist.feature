Feature: delete from watchlist
    In order to delete saved items 
    As a buyer
    I need to select the item and click "delete" submit button from watchlist

  Scenario: try to delete "vase" from watchlist
    Given I am on "Buyer/watchlist"
    Then I should be able to see "vase" in my watchlist
    When I click "delete" submit button after "vase"
    Then I can not see "vase" in my watchlist

