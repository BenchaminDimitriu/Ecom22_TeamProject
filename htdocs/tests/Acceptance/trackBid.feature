Feature: track bid item 
    In order to track my bid on items 
    As a buyer
    I need to view my bids 

  Scenario: view my bids
     Given I am on "Buyer/bids"
     Then I should see all my bids with "auction_id", "item_id", "buyer_id", "seller_id" and "bidder_id"