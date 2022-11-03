Feature: view item details in catalogue 
    In order view details of items
    As a buyer and a seller
    I need to click "details" 

  Scenario: try viewing details from catalogue 
     Given I am on "Main/index"  
     When I select "vase"
     Then I should see an option for details
     When I click on "details" submit button 
     Then I should see "seller_id", "item_id", "item_image", "item_price" and "item_description"
