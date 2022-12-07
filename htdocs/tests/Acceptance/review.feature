Feature: review item 
     In order to review an item
     As a buyer 
     I need to click "Review Item"

 Scenario: try to review an item
     Given I am logged in
     And I am on "Buyer/history"
     When I click the "Review Item" 
     And I input "rating" and "comment" 
     When I click "Submit Review" 
     Then I see my review on "Buyer/myReviews"

 Scenario: try to view review of an item
     Given I am logged in
     And I am on "Seller/listings"
     When I click the "View Reviews" 
     Then I see reviews for "item_id" on "Seller/myReviews"

