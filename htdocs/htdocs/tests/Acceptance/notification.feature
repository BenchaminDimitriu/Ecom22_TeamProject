Feature: notification alert 
    In order to be aware of notifications 
    As a buyer and a seller 
    I need to click on the notification icon 

  Scenario: try to click on notifications 
    Given I am logged in as a user or seller
    And I am on "Main/homepage"
    Then I should see a notication notice on my navigation bar 
    And if I have new notifications
    Then I should see a red exclamation point on top of the icon 
    And if I click the "notification" icon
    Then I should see a list of all the recent notifications 


