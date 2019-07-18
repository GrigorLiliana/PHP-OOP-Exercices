<?php 
/*

Using the flower exercise.

Step 3 :
	We have now another table : Orders
	In the Orders table: The number of order, foreign key of flowers et users

Step 4 :
	Add, beside each flower, a link to add this flower to the current order.
	When clicked, the flower will be added to the session.

	$_SESSION['order'][0] contain tulip
	$_SESSION['order'][1] contain orchid

	A 'summary box' will always be displayed showing the flowers ordered.
	If the same flower is added several times, the quantity will increase. In session, we will now have an array that will look like this, for an order of 2 tulips:

	$_SESSION['order'][0]['quantity'] // contains 2
	$_SESSION['order'][0]['flower'] contains id of tulip

	Add also a link to decrease quantity of flowers

Step 5 : 

	Confirmation of the order
	Add an "Order" button in the order summary box.
	When it is clicked, a \Flowers\ Order object and a \Flowers\Db\OrderManager object will be created, in order to save the order to the database.
 ?>