Feature: add to watchlist
    In order to save an item to my watchlist
    As a buyer
    I need to click "save to watchlist"

  Scenario: try adding "vase" to watchlist
    Given I am logged in
    And I am on "Main/catalogue"
    And I click "save to watchlist" on "vase"
    Then I see "vase"  in my watchlist

