# PREFACE-
AMANHI is a All Children Thrive Bio repository study currently running in Bangladesh, Sylhet district, which is funded by World Health Organization, Bill & Melinda Gates Foundation and supervised by Abdullah H. Baqui, Johns Hopkins University USA. One of the sub study of this project is collecting child anthropometry measurement from the remote location of the field. 
The system is used to collect data on Child anthropometry measurement from at birth to 36 month of the selected children. This study is based on 3000 children.

# System Description-
The system is currently running in remote location of the filed site in a tablet PC, where the internet connection is not available all the time. As the system is a web based, So the system is currently running local web server(XAMPP) because of no internet connection.  

# Database-
A master database used where all information of the child is stored, which is used to pull the information of the child during the anthropomentry measurement.

# Process-
During the visit of the child, the data collector enter the schedule(schedule.php), where they get all the children list. Schedule is auto generate based on Date of birth, visit number, location and current day, whcih is done by multiple complex SQL queries.

To enter the data they select the child information and enter the main system(system.php). Data is entered after many data verification process. Data is collectioed on child Height, wheight MUAC and Length.

After entering the dat, is stored in local mySQL server. Every week field supervisor visit the data collector to upload the collected data in our head office web server. I used different techniques to perform this process.
1. Filed super visor have mobile internet, they connect the PC with internet and run the backup process by clicking button backup. 
2. When they click on backup button the system checks the internet connection through jquery(PHP/CHW_Backup.php).
3. If the connection is OK, then it creates a file through PHP with SQL Insert into queries.
4. After creating the file, the system redirect to another page automatically called (PHP/dataUpload.php).
5. where all the main server location address is programmed and runs the created SQL file. During this process data is inserted into our main server after data verification and duplicacy check.
