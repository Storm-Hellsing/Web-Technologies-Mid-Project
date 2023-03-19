<?php
    function validatePassword($password) 
    {
        // Checking if the password is at least 8 characters long
        if (strlen($password) < 8) 
        {
            return 0;
        } 
        else 
        {
            $hasNumber = false;
            $hasSymbol = false;

            // Loop through each character of the password and checking if it is a number or a symbol
            for ($i = 0; $i < strlen($password); $i++) 
            {
                $char = $password[$i];

                if ($char == '|') 
                {
                    return 0; // The password contains the '|' symbol, so return 0 immediately
                } 
                else if (is_numeric($char)) 
                {
                    $hasNumber = true;
                } 
                else if (!ctype_alpha($char) && !is_numeric($char)) 
                {
                    $hasSymbol = true;
                }
            }

            // Check if the password contains at least one number and one symbol
            if (!$hasNumber) 
            {
                return 0;
            } 
            else if (!$hasSymbol) 
            {
                return 0;
            } 
            else 
            {
                return 1;
            }
        }
    }

    function validateURL($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) === false) 
        {
            return 0;
        } 
        else 
        {
            return 1;
        }
    }

    function validateEmail($email)
    {
        $fileToCheckEmail = fopen('UserList.txt', "r");

        while (!feof($fileToCheckEmail))
        {
            $line = fgets($fileToCheckEmail);
            
            if (strpos($line, $email) !== false) 
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }

        fclose($fileToCheckEmail);
    }

    function validateBusinessName($businessName) 
    {
        $file = fopen('UserList.txt', 'r');
      
        // Loop through each line in the file
        while (!feof($file)) 
        {
          $line = fgets($file);
      
          // Check if the line contains the username
          if (strpos($line, $businessName) !== false) 
          {
            fclose($file);
            return 1;
          }
        }
      
        fclose($file);
        return 0;
      }

      function generateRandomCode() 
      {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        
        // Loop 6 times to generate a 6-digit code
        for ($i = 0; $i < 6; $i++) 
        {
          // Generate a random index to select a character from the $characters string
          $index = rand(0, strlen($characters) - 1);
          // Append the selected character to the $code string
          $code .= $characters[$index];
        }
        
        return $code;
      }

      function generateRandomProductCode() 
      {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        
        // Loop 6 times to generate a 6-digit code
        for ($i = 0; $i < 8; $i++) 
        {
          // Generate a random index to select a character from the $characters string
          $index = rand(0, strlen($characters) - 1);
          // Append the selected character to the $code string
          $code .= $characters[$index];
        }

        $code = 'EPDT-' . $code;
        return $code;
      }

      function generateCustomerCode() 
      {
        $characters = '0123456789';
        $code = '';
        
        // Loop 6 times to generate a 6-digit code
        for ($i = 0; $i < 13; $i++) 
        {
          // Generate a random index to select a character from the $characters string
          $index = rand(0, strlen($characters) - 1);
          // Append the selected character to the $code string
          $code .= $characters[$index];
        }

        $code = 'EC-' . $code;
        return $code;
      }

      function generateMerchantCode() 
      {
        $characters = '0123456789';
        $code = '';
        
        // Loop 6 times to generate a 6-digit code
        for ($i = 0; $i < 13; $i++) 
        {
          // Generate a random index to select a character from the $characters string
          $index = rand(0, strlen($characters) - 1);
          // Append the selected character to the $code string
          $code .= $characters[$index];
        }

        $code = 'EM-' . $code;
        return $code;
      }
      
?>
