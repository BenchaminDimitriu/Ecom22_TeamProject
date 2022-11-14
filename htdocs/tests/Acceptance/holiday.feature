Feature: display homepage 
    In order to change the display of the homepage 
    As a buyer and a seller  
    I need to be on "Main/index"

  Scenario: view homepage
    Given I am on "Main/index"
    Then I see "Main/index" 

  Scenario: view non-holiday homepage
    Given I am on "Main/index" 
    Then I see "Main/index"
  

