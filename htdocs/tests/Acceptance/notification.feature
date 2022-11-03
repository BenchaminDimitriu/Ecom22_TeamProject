Feature: notification alert 
    In order to be aware of notifications 
    As a buyer and a seller 
    I need to click the "notification" icon 

  Scenario: try to click on notifications 
    Given I am logged in
    And I am on "Main/index"
    And I click the "notification" icon
    Then I see "notifications"


