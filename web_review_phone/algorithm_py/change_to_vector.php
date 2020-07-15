<?php
function change_to_vector($string)
{
    $array_score=[];
    if(!isset($_SESSION['array_score']))
    {
        $file = fopen("./algorithm_py/CalculateTF.csv","r");

        while(! feof($file))
        {
            $array_score[]=fgetcsv($file);
        }

        fclose($file);
        $_SESSION['array_score']=$array_score;
        // $file = fopen("./algorithm_py/CalculateTF.csv","r");
        // print_r(fgetcsv($file));
        // fclose($file);
    }
    else
    {
        $array_score=$_SESSION['array_score'];
    }
    $score_pos_bf=0;
    $score_neg_bf=0;
    $score_pos_at=0;
    $score_neg_at=0;
    $nstring=explode(' ',$string);
    foreach($nstring as $a)
    {
        if($a!="\n" && $a!=" ")
        {
            for($i=1;$i<count($array_score);$i++)
            {
                if($a===($array_score[$i][0]??"a"))
                {
                    if($array_score[$i][5]>0)
                    {
                        $score_neg_at=$score_neg_at+$array_score[$i][4];
                        $score_pos_at=$score_pos_at+$array_score[$i][3];
                    }
                    $score_neg_bf=$score_neg_bf+$array_score[$i][4];
                    $score_pos_bf=$score_pos_bf+$array_score[$i][3];
                }
                
            }
        }
    }
    $x=0; $y=0;
    if($score_neg_at>$score_pos_at)
    {
        $x=2;
    }
    elseif($score_neg_at<$score_pos_at)
    {
        $x=1;
    }
    else
    {
        $x=0;
    }
    if($score_neg_bf>$score_pos_bf)
    {
        $y=2;
    }
    elseif($score_neg_bf<$score_pos_bf)
    {
        $y=1;
    }
    else
    {
        $y=0;
    }
    return [$x,$y];
    
}
?>