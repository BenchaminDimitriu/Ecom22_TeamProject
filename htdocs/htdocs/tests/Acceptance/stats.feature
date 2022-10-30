Feature: stats
     In order to see a seller's accomplishments 
     As a buyer
     I need to be click on "details" submit button

 Scenario: try to view a seller's profile 
     Given I am on "Main/catalogue"  
     When I select "vase"
     Then I should see an option for details
     When I click on "details" submit button
     Then I should see "seller_id"
     And if I click on "seller_id"
     Then I should see their listings with "item_id", "item_name", "item_price", "item_description" and "item_image"   
