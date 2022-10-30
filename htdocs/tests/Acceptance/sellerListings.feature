Feature: view seller listings
     In order to view my items for sale
     As a seller
     I want to see all my items  
     
 Scenario: view all seller item listings
     Given I am on "Seller/listings"
     Then I should see all my item listings 
     When I click on "details" submit button
     Then I should see the "buyer_id" and amount paid
     But if it is a bid item 
     Then I should see the bid history with all participating "bidder_id"
      
