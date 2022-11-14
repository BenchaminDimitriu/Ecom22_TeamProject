Feature: checkout process
     In order to buy an item
     As a buyer
     I want to be able to buy an item 
     
 Scenario: try to checkout
     Given I am logged in
     And I am on "Buyer/cart"
     And I have "vase" with "item_price" in my "cart"
     And I click "Checkout"
     Then I see "total"

