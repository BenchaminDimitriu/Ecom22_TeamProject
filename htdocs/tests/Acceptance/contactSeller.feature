Feature: contact seller 
     In order to contact a seller
     As a buyer
     I need to click "send" 

 Scenario: try to send a message to seller
     Given I am logged in
     And I am on "Main/index"
     When I click the "contact the seller" 
     And I input "message"
     When I click "send" 
     Then I see "alert"
