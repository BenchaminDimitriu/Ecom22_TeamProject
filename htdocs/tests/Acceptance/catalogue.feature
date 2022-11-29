Feature: view catalogue
     In order to view items
     As a buyer
     I need to be on "Main/catalogue" 
     
 Scenario: view all item listings
     Given I am on "Main/catalogue"
     Then I see "$data"