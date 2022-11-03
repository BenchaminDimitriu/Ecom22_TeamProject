Feature: view buyer history
     In order to view my order history
     As a buyer
     I want to see all my previously purchased items  
     
 Scenario: view buyer history
     Given I am logged in
     And I am on "Buyer/history"
     Then I should see "$data"
      
