<?php
	function cpf_validator($cpf){
		$clean_cpf = preg_replace('/[^\d]+/', '', $cpf);

		if($clean_cpf == ''){
			echo "CPF vazio";
			return false;
		}

		// List of known invalid and fake CPFs, you can add any one to this list.
		$invalid_cpfs = ["12345678900"];

		// This validation checks the string length, whether the CPF is in the array, and if all the numbers are not the same.
		if(strlen($clean_cpf) !== 11 || in_array($clean_cpf, $invalid_cpfs) ||  preg_match('/^(\d)\1{10}$/', $cpf)){
			echo "CPF inválido";
			return false;
		}

		//Validation of the first digit (final) of the CPF.
			// Variable that will store the sum result, which will be divided, and the remainder will be used to determine the first digit.
			$first_sum = 0;

			for($i = 0; $i < 9; $i++){
				// A descending multiplication from 10 to 2 is performed for each digit.
				$first_sum += intval($clean_cpf[$i]) * (10 - $i);
			}

			// The remainder of the division is taken and subtracted by 11.
			$first_digit = 11 - ($first_sum % 11);

			// If the result is 10 or 11, it should be 0.
			if ($first_digit >= 10) {
				$first_digit = 0;
			}
			// Compare the first calculated digit with the 10th digit of the CPF stored in the variable
			if ($first_digit != intval($clean_cpf[9])) {
				echo "CPF inválido\n";
				return false;
			}
		
		//Validation of the second digit (final) of the CPF.
			// The second digit validation (which follows the same logic as the first validation) will only occur if the first digit is valid.
			// If it's not valid, it will return false and won't proceed to validate the second digit.
			$second_sum = 0;

			for($i = 0; $i < 10; $i++){
				$second_sum += intval($clean_cpf[$i]) * (11 - $i);
			}

			$first_digit = 11 - ($second_sum % 11);
			if ($first_digit >= 10) {
				$first_digit = 0;
			}

			if ($first_digit != intval($clean_cpf[10])) {
				echo "CPF inválido!\n";
				return false;
			}
			echo "CPF válido!\n";
			return true;
	}

	// Run this code via terminal and enter the CPF you want to validate.
	echo "Digite o CPF para validação: ";
	$cpf = trim(fgets(STDIN));

	cpf_validator($cpf);
?>