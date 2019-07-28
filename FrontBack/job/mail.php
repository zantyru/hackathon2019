<?php
    require 'libs/PHPMailer/PHPMailerAutoload.php';
    

    function token_generation($length = 32)
    {
        $chars = 'abdefhiknrstyz1234567890';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++)
        {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

    function say_message_for_mail($message, $email)
    {
        $mail = new PHPMailer(); 
        $mail->isSMTP();

        $mail->Host = 'ssl://smtp.mail.ru';

        $mail->SMTPAuth = true;
        $mail->Username = 'php.job@bk.ru'; 
        $mail->Password = 'LtybcYbrjkftd123!@#';
        $mail->SMTPSecure = 'SSL';
        $mail->Port = '465';

        $mail->setFrom('php.job@bk.ru', 'php.job');
        $mail->addAddress($email);

        $mail->isHTML(true);

        $mail->Subject = 'account verification php.job';
        $mail->Body = $message;
        $mail->AltBody = '';

        if($mail->send())
        {
            $return = 0;
        }
        else 
        {
            $return = 1;
        }
        
        $mail->clearAddresses();
        $mail->clearCustomHeaders();
        $mail->clearAttachments();
        $mail->clearReplyTos();
        return $return;
    }


     <?php

							$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
							mysqli_set_charset($link, 'utf8');
							$stmt = $link->prepare("SELECT `id`, `equipments_in`, `units_in`, `date_equipment`, `cost`, `idcompany`, `name`, `status` FROM `units_equipment` units_equipment INNER JOIN company ON company_idcompany = idcompany  WHERE `status`=1");
							$stmt -> execute() or die ($errors[]='Ошибка выполнения: '.mysqli_error($link).' '.'<a href="/index.php">Перезагрузите страницу urls</a>');
							$result = $stmt->get_result();

							$count = $result->num_rows;
							for ($i = 0; $i < $count; $i++) 
							{
								$table_asoc = $result -> fetch_assoc();

								
								echo '



								<div class="contentblock">
								<input type="checkbox" class="form-check-input" id="exampleCheck1" value="'.$i.'">
								<button type="submit" class="btn btn-primary">'.$table_asoc['name'].' '.$table_asoc['units_in'].'</button>
								</div>
								';						

							}

							mysqli_close($link);

							?>

?>