Library web system
====

Library database web management system, written in PHP/SQL

Report:
Project Report for Project2 of CSCE813 – Database Systems
Junjie Qian, jqian@cse.unl.edu
This report is for the second project of CSCE 813, Fall 2012. In this project, first the files for each question is identified and you can find it in the source code folder along the submission, second the result of the webpage is shown to prove the code works as requests.
All these source codes have been uploaded to my cse account, and you can access it from cse.unl.edu/~jqian/project2/***.php, and replace “***” to corresponding file name.
If you want to reproduce the results, make sure you do this in right way which means you need to set up the PHP access path and so on.
No comments for the code is included in this report, please refer to the source code files to check how all these functions works out and the along comments.

1.	Patron report.php
The file is named “report.php”. First, you need to choose one reader name from one droplist, and press the “Submit” function.
 
After press the “Submit” the page will jump to the reader’s information, which includes the books the reader borrowed, when the duedates are, when he/she returns the book and the current fine for each book (as request, assume the current date is 11/01/2012).
For more results, please try the code.
   
   
 

2.	Patron information.php
The files for this questions are, information.php, view.php, modify.php and modify_finish.php. You need to open “information.php” to access all the funtions. In the “information.php”, if you want to show one patron information, just choose one from droplist and click the “Submit”, else if you want to modify one patron’s information, just click the link which will redirect you to another file which allows you to modify the chosen patron’s information.
 
First to show one reader’s information, choose one reader name from the droplist and then click the “Submit” button and then you will get the information of this reader.
   
   
Second to modify one reader’s information, click the link which will redirect to “view.php” that shows all the readers’ information and provides the modify function.
 
Choose the reader you want to modify, and click the beside modify button, the page will jump to the modify page as the following.
  
The red circle shoes the reader name that you are going to modify. Input the information that need to be modified, the following is the example.
  
Click the “submit” button after the input of the modified information, and the page will redirect to this result which shows succefully modify or not.
 
The record will be changed, and the result is shown as following. (direct select from the database)
 





3.	Librarianreport.php
The files for this question include, Librarianreport.php, physicalcopy.php, books.php, duedate.php, fines.php. Need to open Librarianreport.php first to redirect to other links, which is choose one report.
 

3.1	Report PhysicalCopy on hand
After choosing the report in drop list, the following result will be shown. File name is “physicalcopy.php”.
 
3.2	Report book with number of PhysicalCopy
After choosing the report in drop list, the following result will be shown. File name is “book.php”.
 
3.3	Report due date for PhysicalCopy being borrowed sorted by catalogNo
After choosing the report from drop list, the following result will be shown. File name is “duedate.php”.
 

3.4	Report readers with total current fines
After choosing the report, the following result will be shown. File name is “fines.php”.
 


4.	Librarianupdate.php
The code files for this question include, Librarianupdate.php, addnewreader.php, insertreader.php, addnewbook.php, insertbook.php, modify_overduechargeperday.php. To start this, first need to open Librarianupdate.php to redirect to different functions. Once open the Librarianupdate.php, the page shown as following. Choose one function, and click submit button to jump to that php page.
 

4.1	Function for adding new reader and modifying reader information
After choosing function for adding new reader and modifying reader information, the result will be shown as following. In this page, if want to add one new user, you need to input different areas such as username and so on, then click submit and this record will be added to the database; else if you want to modify this function, just click the link which will redirect you to the modification function which has been shown in the second question.
 
The example will be shown as this
 
And the result would be
 
To check whether the record is added, the following record is checked with SQL command.
 
For more examples, please follow the introduced example.
Another task is if want to modify the reader information, please click that link with read lines. And it would redirect to another modification page that described in the second question, and shown as followings.
 
To modify the one needs to be modified, just click the modify button that will redirect you to the following page.
 
And then input the information of this reader as the following example (you can input anything as you wish, and all input in this report is for example).
 
Then click the submit button that will redirect you to the successful page or fail page as following.
  
The record in database will be changed as followings.
 
4.2	Function for adding new book
After choosing this function, the page will be shown as following.
 
Input sample book record as following.
 
Then click the submit button, the page will be shown as
 
Check the database, the result shown that it works.
   
4.3	Function for modifying the overdueChargePerDay
After choosing this function, the page will be shown as following.
   
After choosing one book and then specify the new overduechargeperday, input that value and click the submit button. The example input is shown as following.
 
The result will be shown as following.
 

Conclusion:
So far, all the questions have been answered in this report and the webpage display is shown.
