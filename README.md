# PREFACE-
AMANHI is a All Children Thrive Bio repository study currently running in Bangladesh, Sylhet district, which is funded by World Health Organization, Bill & Melinda Gates Foundation and supervised by Abdullah H. Baqui, Johns Hopkins University USA. One of the sub study of this project is collecting child anthropometry measurement from the remote location of the field. 
The system is used to collect data on Child anthropometry measurement from at birth to 36 month of the selected children. This study is based on 3000 children.
# Project link
https://bit.ly/2HBw2Qb

# System Description-
The system is currently running in remote location of the filed site in a tablet PC, where the internet connection is not available all the time. As the system is a web based, So the system is currently running local web server(XAMPP) because of no internet connection.  

# Database-
A master database used where all information of the child is stored, which is used to pull the information of the child during the anthropometry  measurement.

# Process-
During the child visit, the data collector enter the schedule(schedule.php), where they get all the children list. Schedule is auto generate based on Date of birth, visit number, location and current day, which is done by multiple complex SQL queries.

To enter the data they select the child information and enter the main system(system.php). Data is entered after data verification process. Data is collected on child Height, weight, MUAC and Length. Data is stored in local mySQL server. 

Every week field supervisor visit the data collector to upload the collected data in our head office web server. I used different techniques to perform this process.
1. Filed supervisor have mobile internet, they connect the PC with internet and run the backup process by clicking backup button. 
2. When they click on backup button the system checks the internet connection through jquery(PHP/CHW_Backup.php).
3. If the connection is OK, then it creates a file through PHP with SQL Insert into queries(PHP/CHW_Backup.php).
4. After creating the file, the system redirect to another page automatically called (PHP/dataUpload.php).
5. where all the main server information is programmed and runs the created SQL file. During this process data is inserted into our main server after data verification and duplication check.

To develop this system complex algorithm and techniques are used. So to make it more easy I added interactive functions using javascript, JQuery and ajax.

# File description 
1. Index.php - To login the user
2. Schedule.php - To display the current visit schedule
3. system.php - Used to enter data on a specific children
4. PHP/ChildChk.php - To check the child duplicacy and status
5. PHP/CHW_BackUP.php - To create a backup file of the enterted data
6. PHP/dataUpload.php - To upload the data to our main web server.
7. PHP/FullDataBackup.php - To back full databases.
8. PHP/getAllData.php - Used to pull all all data of the child after selecting a child from the schedule list.
9. PHP/next_re_sch.php - To re schedule the child visit.
10. PHP/next_sch.php - To check the next schedule.
11. PHP/saveRe_data.php - After re scheduling the child visit to save the re scheduling date.
12. PHP/search_child.php - To know the visit status of any specific child visit information.
13. PHP/updateRe_data.php - To update the rescheduling information.
14. PHP/userChk.php - To check the user information.
# Used techniques
PHP,Jquery, Ajax, MySql
