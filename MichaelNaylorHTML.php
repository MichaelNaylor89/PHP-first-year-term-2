<table border='1'>
	<tr>
		<td>Rectangle 1:  Michael Naylor 16041820</td>

		<td>Rectangle 2: 
			<?php
				$x = 3;
				$y = 4;
				$z = 5;
				
				echo $x + $y +$z
			?>
		</td>

	</tr>
	<tr>
		<td>Rectangle 3:
			
			<?php
				$seed = 3034;
				srand ($seed);
				echo (rand());
			?>
			
		</td>
		<td>Rectangle 4:
			<?php
				$array = array (30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40);

				$number;
				foreach ($array as $value) {
				// check for even numbers
				if (($value % 2) == 0) {
				$number = $value;
				echo $number;
				echo "\n";
				}
				}
			?>
		</td>
	</tr>
		<td>Rectangle 5:
			<form name ="rec5Form" action="" method="get">
				<input type="text" name="inputRec5"<br />
				<input type="submit" name="submitRec5">
			</form>
			<?php
				$x = $_GET['inputRec5'];
			?>
				Your input was: 
			<?php
				echo $x;
			?>
		
		</td> 
		<td>Rectangle 6:
			<?php
				if(is_numeric($x)== true)
				{
					if (($x % 2) == 1)
					{
						echo "The number input was odd";
					}
					else
					{
						echo "The number input was even";
					}
				}
				else
				{
					echo "the input was a string";
				}
			?>
		</td>
	</tr>
	<tr>
		<td>Rectangle 7: Using the input from Rectangle 5 in an srand funtion  </br>
			<?php
				if (is_numeric($x) == true)
				{
					srand ($x);
					echo (rand());
				}
				else
				{
					echo "The input was a string";
				}
			?> 
		</td>
		<td>Rectangle 8:
			<?php
				if(is_numeric($x) == true)
				{
					echo "the input was a number";
				}
				else
				{
					echo str_rot13 ($x);
				}
			?>
		</td>
	</tr>
	<tr>
		<td>Rectangle 9:
			<?php
				
			?>
		</td>
		<td>Rectangle 10:
			<form name ="rec10Form" action="" method="get">
				<input type="text" name="inputRec10"<br />
				<input type="submit" name="submitRec10">
			</form>
			
			<?php
				$userPassword = $_GET['inputRec10'];
				if ($userPassword != null)
				{	
					echo "the md5 hash for your input is: ";
					$userHash = md5($userPassword);
					echo $userHash;
					$m = 'm';
					$i = 1000;
					do
					{
						$passwordGuess = $m.$i;
						
						$guessHash = md5($passwordGuess);
						
						$i++;
						
					}while ($guessHash != $userHash || $i > 10000);
					
					echo "\n the password was is: ";
					echo $passwordGuess;
				}
			?>
		</td>
	</tr>
</table>