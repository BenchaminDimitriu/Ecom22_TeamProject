Feature: contact seller 
     In order to contact a seller
     As a buyer
     I need to click "contact seller" 

 Scenario: try to send a message to seller
     Given I am logged in
     And I am on "Main/catalogue"
     When I click the "contact seller" 
     And I input "title" and "message" 
     When I click "send" 
     Then I see my message on "Buyer/messageboard"
