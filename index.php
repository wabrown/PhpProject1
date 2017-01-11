<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>a title</title>
	</head>
	<body>
	
		<?php
			include('Student.php');

			$students = array();
			$studentNo = 1;
			
			$first = new Student();
			$first->surname = "Doe";
			$first->first_name = "John";
			$first->add_email('home','john@doe.com');
			$first->add_email('work','jdoe@mcdonalds.com');
			$first->add_grade(65);
			$first->add_grade(75);
			$first->add_grade(55);
			$students['j123'] = $first;
			
			$second = new Student();
			$second->surname = "Einstein";
			$second->first_name = "Albert";
			$second->add_email('home','albert@braniacs.com');
			$second->add_email('work1','a_einstein@bcit.ca');
			$second->add_email('work2','albert@physics.mit.edu');
			$second->add_grade(95);
			$second->add_grade(80);
			$second->add_grade(50);
			$students['a456'] = $second;
			
			$third = new Student();
			$third->surname = "Brown";
			$third->first_name = "William";
			$third->add_email('home','william@brown.com');
			$third->add_email('work','wbrown@importantCompany.com');
			$third->add_grade(99);
			$third->add_grade(98);
			$third->add_grade(100);
			$students['j789'] = $third;
			
			ksort($students); 
			
			foreach($students as $student){
				
				echo '**********Student'.$studentNo.'**********';
				echo $student->toString();
				$studentNo++;
			}
		?>
	</body>
</html>