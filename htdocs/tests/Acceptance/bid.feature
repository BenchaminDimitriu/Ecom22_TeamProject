Feature: bid item 
    In order to bid on an item
    As a buyer
    I need to click the "bid"

  Scenario: try bidding on "vase" with correct information
    Given I am logged in
    And I am on "Main/index"
    And I click on "bid" on "vase"
    And I input "bid_amount"
    When I click "confirm bid" 
    Then I see "bid_amount" for "vase"

    Scenario: try bidding on "vase with incorrect information
    Given I am logged in
    And I am on "Main/index"
    And I click on "bid" on "vase"
    And I input "bid_amount"
    When I click "confirm bid" 
    Then I do not see "bid_amount" for "vase"
