#!/usr/bin/php
<?PHP
	if ($argc == 2)
	{
		$grade_sum = 0;
		$n_students = 0;
		$moulinette = 0;
		$peer_grade = 0;

		$data = file('php://stdin');
		unset($data[0]); // deletes heading
		if ($argv[1] == 'average')
		{
			foreach($data as $elem) // each line
			{
				$tab = explode(";", $elem); 
				if($tab[1] != "" && $tab[2] != "moulinette")
				{
					$grade_sum += $tab[1];
					$n_students += 1;
				}
			}
			if ($n_students > 0)
			{	
				$res = $grade_sum / $n_students;
				echo "$res\n";
			}
		}
		elseif ($argv[1] == "average_user")
		{
			asort($data);
			foreach ($data as $key => $value)
			{
				$tab = explode (";", $value);
				$student_list[$tab[0]][$key] = $value;
			}
			foreach ($student_list as $student)
			{
				$n_students = 0;
				$sum_grade = 0;
				foreach ($student as $elem)
				{
					$tab = explode (";", $elem);
					if ($tab[1] != "" && $tab[2] != "moulinette")
					{
						$sum_grade += $tab[1];
						$n_students += 1;
					}
				}
				if ($n_students > 0)
				{
					$res = $sum_grade / $n_students;
					echo "$tab[0]:$res\n";
				}
			}
		}
		elseif($argv[1] == "moulinette_variance")
		{
			asort($data);
			foreach ($data as $key => $value) 
			{
				$tab = explode(";", $value);
				$student_list[$tab[0]][$key] = $value;
			}
			foreach($student_list as $student)
			{
				$n_students = 0;
				$peer_grade = 0;
				$moulinette = 0;
				foreach ($student as $elem)
				{
					$tab = explode(";", $elem);
					if($tab[1] != "" && $tab[2] != "moulinette")
					{
						$peer_grade += $tab[1]; // adds to the sum of peer grades for this student
						$n_students += 1;
					}
					if ($tab[2] == "moulinette")
						$moulinette = $tab[1];
				}
				if ($n_students != 0)
				{
					$av_grade = $peer_grade / $n_students;
					$res = $av_grade - $moulinette;
					echo "$tab[0]: $res\n"; 
				}
			}
		}
	}

?>