# Simple PHP Forum Application

This is a simple PHP Forum Application created with core PHP. It uses simple Model-View-Controller (MVC) like pattern. This PHP forum Application uses Object Oriented programming to create a forum. It uses PHP Data Object (PDO) to connect to database It supports 

- Creation of forum topic
- Reply message to forum
- User registration

The controller are the files at root folder of the application. They are

- index.php: The main controller
- create.php: Controller to create a new forum topic
- register.php: Controller to register a user
- topic.php: Controller to display a forum topic and manage reply to it
- topics.php: Controller to display multiple forum topics

Models are contained in libraries folder. Classes are defined for each model containing data and methods

- Database.php: Class used to connect to database
- Template.php: Calss to define and manage template or view
- Topic.php: Class to define the forum topic
- User.php: Class to define the user
- Validator.php: Class to validate different input forms

The views are inside templates folder. Templates folder contains stylesheets, bootstrap javascripts and CKeditor files.

The core folder contains initializer code and the config folder contains configuration variables and constants. init.php reads config.php, connects to database and includes other required codes. This file is included in every controller.

The helpers folder contain helper functions that are needed by the code anywhere else. They are extensively used inside views. User avatar is stored in images/avatars and default avatar is stored in templates/img/.

To install this applicaion, create a db from talkingspace.sql file. then copy all other files to your htdocs folder and run.
