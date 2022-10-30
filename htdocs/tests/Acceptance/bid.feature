Feature: bid item 
    In order to bid on items 
    As a buyer
    I need to select the item and click the "bid" submit button

  Scenario: try bidding on "vase"
    Given I am on "Main/catalogue"
    When I select "vase" 
    And I click on "bid" button
    Then I should be able to input an amount
    When I click "confirm bid" button
    Then I should be redirected to "Buyer/bids"
