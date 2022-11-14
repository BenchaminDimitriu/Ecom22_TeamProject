Feature: stats
     In order to see a seller's accomplishments 
     As a buyer
     I need to be click on "details" 

 Scenario: try to view a seller's profile 
     Given I am logged in
     And I am on "Main/index"  
     When I click on "details" 
     Then I see "Seller/stats" 