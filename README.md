# phpmvc
Custom MVC with PHP

Basic PHP MVC framework.


Run composer before starting for installing or updating modules.


Check the source code refering to examples of controller, views, models


<b>Features :</b>

<b>Model : </b>Impleted using Eloquent for database models : http://laravel.com/docs/4.2/eloquent
- Composer module : https://packagist.org/packages/illuminate/database


<b>View : </b>

Layouts - create custom layouts - has default.php set as default layout

- Calling custom layout app/views/Layout/mylayout.php

<pre>$this->layout('mylayout');</pre>

Elements - create elements to be called in view app/views/Element/default.php

Inside view file

<pre>echo $this->element('default');</pre>

Sending data from controller to view - 

<pre>$this->view('index', ['name' => 'myName',
			'message' => 'We have users controller too.']);</pre>

- Above example sends array of string to index view. Same can be accessed by

<pre>echo $this->data['name']; echo $this->data['message'];</pre>


<b>Controller : </b>
- Default controller is home.php - HomeController

- Default action is set to index method of HomeController

- Can use multiple model in one controller
 
 <pre>$this->uses(array('User', 'Location'));</pre>
 <pre>$this->model->User->myFunction();</pre>


<b>Feel free to fork or using it in your basic projects. :) 

Thank You.

