->First go to home.html
->New user needs to sign up by clicking on signup
->All the details of the users stores in registrations table where email is the primary key
->Old user can login to the site at any time without any registration constarints
->Later on after signup the page is redirected to login.html
->The login validation codes are in logcheck.php, index.php, logout.php pages
->The login is made using cookies to retreive user email
->The dashboard page will be opened after login to the website
->There there are links that shift our pages to respective ones
->For each html file there are respective php pages
->For each page there is form that connects to the database in xampp
->The respective user with his email id can access only his groups and his contacts
->No user can change or delete others contacts or groups
->For add contacts there is addcontact.html, addc.php file to add details to the table contacts in inmar database
->Delete Contact link redirects to deletecontact.html, delcontact.php
->The person whose mail id is submitted in this, his/her contact will be deleted from contacts table
->In contacts table we will keep groupname and groupid by default as NULL values
->Create group will be redirected to creategroup.html and then creategrp.php
->The groupname and groupid will be stored in groups table with user email taken from cookie where groupid is primary key
->Delete group will delete the group from the groups table by taking the groupid
->Add contact to group adds the details of a person given by user with his email to particular group the user wants to fit them in
->For this purpose the user gives groupid to add the contact to particular group
->When the user adds a contact to the group the NULL values of groupname and groupid will be replaced by the respective values in the groups table
->In the same way the delete contact from group also works
->It makes the groupname and groupid attributes of a contact to NULL
->Display contacts link makes the display of all the contacts the individual person has made to himself
->No user can view or access others contacts
->In the same way the Display groups link gives the display of the groupname and groupid as table heading and the contact details present in the contacts table as table data
->For this I have used nested while in php file



DataBase Working:



->All the details of the user are stored in registrations table with email user email as primary key
->When we create a new group the user email is retrieved with the help of cookies and then groupname, groupid and user email are added to groups table groupid as primary key
->When new contacts are added the details of the contact are added to contacts table with groupname and groupid as NULL
->When the contact added to group then the groupid and user email are taken from cookies and fill the groupname and groupid of contacts table with details from groups table
->When the contact is deleted from group the groupname and groupid attributes of a particular row are set to NULL using the groupid and user email from cookies


Mannem Srinivasa Rao
Email: mannemsrinivasarao43@gmail.com
Contact: 8008714209
