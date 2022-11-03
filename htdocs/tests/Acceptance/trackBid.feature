Feature: track bid item 
    In order to track my bid on items 
    As a buyer
    I need to be on "Buyer/bids"

  Scenario: view my bids
     Given I am logged in
     And I am on "Buyer/bids"
     Then I see "$data"