Feature: add to watchlist
    In order to save an item into my watchlist
    As a buyer
    I need to select the item and click "save to watchlist" submit button  

  Scenario: try to add "vase" to watchlist
    Given I am on "Main/index"
    When I select "vase" 
    And I click "save to watchlist" submit button 
    Then I should be able to see "vase" in my watchlist

