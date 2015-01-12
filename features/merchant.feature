Feature: merchant
  In order to generate a list of transactions
  I should have data.csv file and should supply merchant id
  I need to be able to get the the transactions for that merchant

Scenario: Display transactions for a merchant
  And I have a file named "console.php"
  And I have a file named "data.csv"
  When I run "php console.php data.csv 2"
  Then I should get:
  """
  [2 : 02/05/2010 : EUR 12.0asdf0]
  """
