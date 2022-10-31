Feature: search item
     In order to search for an item
     As a user and a seller
     I need to be able to write search terms and get results back
     
 Scenario: search "vase"
     Given I am on "Main/index" 
     When I input "vase" on the search bar 
     And I click on the "search" icon submit button
     Then I should see all the findings for items having string "vase" in their name
