Feature: view buyer history
     In order to view my order history
     As a buyer
     I want to see all my previously purchased items  
     
 Scenario: view buyer history
     Given I am on "Buyer/history"
     Then I should see all my purchases
     And I should see "order_id", "buyer_id", "seller_id", "item_id", "item_name", "item_image" and "item_price" for each purchase
  
      
