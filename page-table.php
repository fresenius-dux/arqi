<?php
/*
	Template Name: Table Page	
*/

get_header(); 
global $wpdb;
?>
<div>
    <table class="table">
        <tr>
            <th>User Email</th>
            <th>Today's Date</th>
            <th>Time</th>
            <th>Question 1</th>
            <th>Question 2</th>
            <th>Question 3</th>
            <th>Question 4</th>
            <th>Question 5</th>
            <th>Question 6</th>
            <th>Question 7</th>
            <th>Question 8</th>
            <th>Question 9</th>
            <th>Question 10</th>
            <th>End Result</th>
        </tr>
        <?php 
            foreach( $wpdb->get_results("SELECT * FROM arqiResults;") as $key => $row) {
                // each column in your row will be accessible like this
                $user_email = $row->user_email;
                $todays_date = $row->todays_date;
                $time  = $row->time;
                $question1 = $row->question1;
                $question2 = $row->question2;
                $question3 = $row->question3;
                $question4 = $row->question4;
                $question5 = $row->question5;
                $question6 = $row->question6;
                $question7 = $row->question7;
                $question8 = $row->question8;
                $question9 = $row->question9;
                $question10 = $row->question10;
                $endResult = $row->endResult;
                
                echo '<tr>';
                    echo '<td>'.$user_email.'</td>';
                    echo '<td>'.$todays_date.'</td>';
                    echo '<td>'.$time.'</td>';
                    echo '<td>'.$question1.'</td>';
                    echo '<td>'.$question2.'</td>';
                    echo '<td>'.$question3.'</td>';
                    echo '<td>'.$question4.'</td>';
                    echo '<td>'.$question5.'</td>';
                    echo '<td>'.$question6.'</td>';
                    echo '<td>'.$question7.'</td>';
                    echo '<td>'.$question8.'</td>';
                    echo '<td>'.$question9.'</td>';
                    echo '<td>'.$question10.'</td>';
                    echo '<td>'.$endResult.'</td>';
                echo '</tr>';

            } 
        ?>
    </table>
</div>


    
        
            
                    
<?php get_footer(); ?>