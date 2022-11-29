Feature: view seller listings
     In order to view my items for sale
     As a seller
     I want to be on "Seller/listings" 
     
 Scenario: view all seller item listings
     Given I am logged in
     And I am on "Seller/listings"
     Then I see "$data"

