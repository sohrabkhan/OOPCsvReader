Affiliate Window Candidate Task (Senior Developer)
===============================
## Installation ##
There are no framework or package requirements. Just extract and everything should work out of the box.
Make sure you have php.exe in your environment variables & phpunit installed (to run the tests).
Note: There are no framework left over files as no frameworks are used.

## How to? ##
In it's simplest form if you have 'data.csv' located in the root of the project then run the following:

```
#!php

php console.php
```
This command will print all the transactions found in the data.csv file.


To specify a different file (data2.csv) or if you want to explicitly specify the CSV file then run the following:

```
#!php

php cosole.php data2.csv
```

This command will print all the transactions found in the data2.csv file

To specify a CSV file and a merchant id then run the following:

```
#!php

php console.php data.csv 2
```
This command will print all the transactions for the Merchant with ID 2 in the data.csv file.


## Design Decisions ##
I did not choose an framework like Symfony2 but followed the Model View Controller architecture as it helps in the 

"Separation of Concern" and gives it an elegant structure.
The project is divided into:
* Models located in the src/Model folder
* Controllers located in the src/Controller folder
* Views located in the src/View folder
* Services located in the src/Service folder
* Tests located in the src/Tests folder
* Exceptions located in src/Exception folder

### AutoLoader ###
For the sake of elegant Object Oriented Programming I've created a very simple / bare minimum AutoLoader.php which is 

located in the src folder. This autoloader helps in including any class that might be required and removes the need for 

any include statements.

The bootstrap.php file uses the AutoLoader.php to register all the PHP files contained in the directories that I needed.
The console.php file which is the entry script for our project uses the bootstrap.php. The console.php and bootstrap.php 

files are the only non-OOPHP files in the project.

### Standards ###
This project conforms to the SOLID and DRY principles. The coding standards are very similar to Symfony2. I've also used 

the dependency injection design pattern wherever needed.

I've followed TDD and BDD standards (details below).

### Models ###
I've found that Currency, Merchant & Transaction are entities that our project will need so I've created them as Models.

### Controller ###
Since we are only generating reports so I've created a Controller called ReportController. The method generateAction 

generates our report.
Incase everything goes well and all the transactions are retrieved then the controller calls the view file 

report_generate.html.php which contains a foreach loop which prints out the details of the transactions.

### Service ###
Similar to Symfony's Services I've also added some helper services that can be used anywhere in the project. I've defined 

2 interfaces 'DataServiceInterface' and 'CurrencyServiceInterface' which are used to enforce a general structure for 

design / development of the particular services.

The DataServiceInterface defines the structure for Data Services. In our case since we are using a CSV file as our data 

store so I've implemented (i.e. inherited) the interface in CsvDataService. I've also designed an AbstractDbmsDataService 

which can be extended if we were to move to a DMBS data store.

To conform to the 'S' i.e. single responsibility of the SOLID principles I've created the CsvReader that can read from the 

CSV file. A similar files called CsvWriter can be designed that would write to the CSV file. Since that is out of the 

scope of the project that is why I'm not implementing that.

The CurrencyServiceInterface is designed to enforce a structure for a currency service. Since we are using static values 

for the currencies so I've implemented (i.e. inherited) the interface in StaticCurrencyService.

### Tests ###
I have followed TDD & BDD style of development which should be the style of every developer. 
Due to the scope of the project I've done several unit testing, one functional test and one behaviour test using behat. 

Included is phpunit.xml file so you can run the unit tests with just the following command:
phpunit

For the behat Test the simplest method is to download behat.phar into the project root directory and run the following:
php behat.phar --init
php behat.phar

### What this application is? ###
This application is in no way intended to be the best CSV reading application but only shows my Object Oriented 

Programming skills in which I've thoroughly used several design patterns like MVC, Abstraction, Dependency Injection