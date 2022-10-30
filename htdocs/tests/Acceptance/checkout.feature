Feature: checkout process
     In order to buy items
     As a buyer
     I want to be able to buy several items
     
 Scenario: try to checkout
     Given I have item with $200 price in my cart
     And I have item with $1000 price
     When I go to checkout process
     Then I should see that total number of products is 2
     And my order amount is $1200
     When I click the "pay" submit button
     Then I should be redirected to "Buyer/history" 
     And I should see my purchase


