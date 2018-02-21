# Inmar Contact Management System
 
This web application is developed for the purpose of managing contacts and contact groups for the Inmar employees

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes

### Prerequisites

What things you need to install the software

```
->Xampp Server
->Angluar.js file i.e., included in the uploads
```

## Built With

* HTML - The web page contents display
* CSS - Styles
* [Bootstrap, Angular JS] - Framework
* PHP - Server side scripting

## Deployement

* Start MySQL and Apache servers in Xampp control panel
* Import inmar.sql file to the xampp server
* Place all the files in the xampp/htdocs/Inmar folder and run it as localhost
* Start the web application with home.html file i.e., localhost/Inmar/home.html

## Running

* If you are new user click on Signup which will direct you to a new formvalid.html page. In this page you need to give the details and email to be ended with @inmar.com compulsorily
* The signup page will direct you to a login page where you need to login with the respective email and the password
* If you are already an user then you can click on login in the home page and you need to submit the email id with the respective password to login to the application
* After login to the application the dashboard page for the particular user who had login to the application appears in the browser
* The home page consists of different buttons that direct you to different pages that can help you to manage contacts in the database of the respective user
* No user can access or modify the contacts or groups of the other user
* Any user can add, delete, edit or set active/inactive a contact and create, delete set active/inactive a group
* A user can add, delete his contacts to/from the groups created by him only
* The contacts can be displayed in the form of table from the contacts table in inmar database i.e.,

	Name | Email | Phone Number
	------------ | ------------- | ------------
	Name of contact1 | Email of contact1 | Phone no of contact1
	Name of contact2 | Email of contact2 | Phone no of contact2

* The groups of the user can be displayed from the contacts table in inmar database as

	Group Name1 | Group Id1 | 
	------------ | ------------- | ------------
	Name of contact1 | Email of contact1 | Phone no of contact1
	Name of contact2 | Email of contact2 | Phone no of contact2
	Group Name2 | Group Id2 | 
	------------ | ------------- | ------------
	Name of contact1 | Email of contact1 | Phone no of contact1
	Name of contact2 | Email of contact2 | Phone no of contact2

* After performing necessary operations the person can logout from the web application by logout in the dash board page which will redirect the person to a login page
  


