Feature: pop up feature item 
    In order to be aware of the latest feature item
    As a buyer 
    I need to view the display on the homepage 

  Scenario: view homepage  
    Given I am on "Main/homepage"
    Then I should see a pop alert of the lastest feature item 
    And if I click on "close" submit button 
    Then I should no longer see the pop up 


