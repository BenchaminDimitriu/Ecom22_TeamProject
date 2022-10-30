Feature: display homepage 
    In order to change the display of the homepage 
    As a buyer and a seller  
    I need to access the site during a holiday date

  Scenario: view homepage 
    Given I am on "Main/homepage"
    And it is a holiday date 
    Then I should see a different homepage background
    But if it is not a holiday date 
    Then I should see the regular homepage background
  

