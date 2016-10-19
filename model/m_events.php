<?php

class Lotto
{   
    public $Database;


function __construct()
    {
        global $Database;

            $server   = 'localhost';
            $user     = 'root';
            $pass     = '';
            $db       = 'lottery';
            $Database = new mysqli($server, $user, $pass, $db); 
            $this->Database = $Database;
    }

    public function get_lotto_numbers($ball_1, $ball_2, $ball_3, $ball_4, $ball_5, $ball_6)
    {
            $query = "SELECT * , GROUP_CONCAT(ball ORDER BY ball) balls
                        FROM
                             (SELECT *, `Ball 1` ball FROM `lotto`
                              UNION
                              SELECT *, `Ball 2` ball FROM `lotto`
                              UNION
                              SELECT *, `Ball 3` ball FROM `lotto`
                              UNION
                              SELECT *, `Ball 4` ball FROM `lotto`
                              UNION
                              SELECT *, `Ball 5` ball FROM `lotto`
                              UNION
                              SELECT *, `Ball 6` ball FROM `lotto`)
                              x
                        WHERE ball IN ($ball_1, $ball_2, $ball_3, $ball_4, $ball_5, $ball_6)
                        GROUP 
                            BY `ID` 
                        HAVING COUNT(*) = 3 || COUNT(*) >= 6 ";

            if($stmt = mysqli_prepare($this->Database, $query))
            {
                mysqli_stmt_execute($stmt);
                $resultObject = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
            }
                $lottos = array();
                $size = mysqli_num_rows($resultObject);
                for($i = 0; $i < $size; $i++)
            {
                $lottos[$i] = mysqli_fetch_array($resultObject, MYSQLI_ASSOC);
            }

            foreach ($lottos as $key => $value)
            {
              if (strlen($lottos[$key]['balls']) <= 11)
              {
               
                $lottodate = date_create('10/01/13');
                $lottodate = date_format($lottodate,"d/m/y");

                $date = date_create($lottos[$key]['Draw date']);
                $lottos[$key]['Draw date'] = date_format($date,"d/m/y");

                if ($lottos[$key]['Draw date'] <= $lottodate)
                {
                  $lottos[$key]['jackpot'] = '25';
                }
                else
                {
                  $lottos[$key]['jackpot'] = '10';
                }
              }
            }
            return $lottos;
      }

      public function validate($ball_1, $ball_2, $ball_3, $ball_4, $ball_5, $ball_6)
      {

        $balls = array($ball_1, $ball_2, $ball_3, $ball_4, $ball_5, $ball_6);
        $balls = array_filter($balls);
        $error = array();
          if (count($balls) < 6)
          {
            $error[] = 'You must choose 6 numbers';
            header('Location: index.php');
          }

          if (max($balls) > 59)
          {
            $error[] = 'Number must be below 59';
            header('Location: index.php');
          }

          if (count(array_unique($balls)) < count($balls))
          {
            $error[] = 'Each number must be unique';
            header('Location: index.php');
          }



          if (min($balls) <= 0)
          {
            $error[] = 'Number must be positive';
            header('Location: index.php');
          }

          $_SESSION['error'] = $error;
      }
    }  