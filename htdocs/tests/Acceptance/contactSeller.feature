Feature: contact seller 
     In order to contact a seller
     As a buyer
     I want to be able to select the seller of a listing and write a message 

 Scenario: try to write a message to "vase" seller through Main/catalogue 
     Given I am on "Main/catalogue"
     Then I should see a listing of all items available to bids and purchase 
     When I select "vase"
     Then I should see "contact the seller"
     When I click the "contact the seller" submit button
     Then I should see a form to fill
     When I click "send" submit button
     Then the message is sent to the seller's email 
