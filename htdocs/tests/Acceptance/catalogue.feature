Feature: view catalogue
     In order to view items
     As a buyer
     I need to be on "Main/index" 
     
 Scenario: view all item listings
     Given I am on "Main/index"
     Then I see "$data"