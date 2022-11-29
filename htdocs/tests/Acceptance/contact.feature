Feature: contact buyer or seller 
     In order to contact a buyer or seller
     As a buyer and seller
     I need to click "contact buyer" or "contact seller" 

 Scenario: try to send a message to seller
     Given I am logged in
     And I am on "Main/catalogue"
     When I click the "contact seller" 
     And I input "title" and "message" 
     When I click "send" 
     Then I see my message on "Buyer/messageboard"

 Scenario: try to send a message to buyer
     Given I am logged in
     And I am on "Seller/messageboard"
     When I click the "contact buyer" 
     And I input "title" and "message" 
     When I click "send" 
     Then I see my message on "Buyer/messageboard"

 Scenario: try to send a message to seller incorrectly
     Given I am logged in
     And I am on "Main/catalogue"
     When I click the "contact seller" 
     And I do not input "title" and "message" 
     When I click "send" 
     Then I do not see my message on "Buyer/messageboard"

 Scenario: try to send a message to buyer incorrectly 
     Given I am logged in
     And I am on "Seller/messageboard"
     When I click the "contact buyer" 
     And I do not input "title" and "message" 
     When I click "send" 
     Then I do not see my message on "Seller/messageboard"

