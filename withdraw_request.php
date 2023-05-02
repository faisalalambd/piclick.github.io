<?php
include 'session.php';
include 'config.php';
 $date=date("l jS \of F Y h:i:s A") ;
  $withdraw_amount = ($_REQUEST['withdraw_amount']);
   $withdraw_by = ($_REQUEST['medium']);
  echo $total_amount = ($_REQUEST['total_amount']);
  
  //checking minimum withdrawal
 if($withdraw_amount<5){
                $text='Minimum Withdrawal is $5';
                header("Location: withdraw.php?text='$text'");
            }else{
            
  //calculating the total Withdraw          
            $total_withdraw=0;
             $sql = "SELECT * FROM withdraw_request where withdrawal_account='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
               $total_withdraw+=$row['withdrawal_ammount'];
            }}
            echo $total_withdraw+=$withdraw_amount;
            
            
    //get current balance 
     $sql = "SELECT * FROM users where username='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
             $current_balance=$row['current_balance'];
             $user_name=$row['name'];
            }}
            
    //check withdrawal legacy
    if($current_balance<$withdraw_amount){
           $text='You Do not Have sufficient Balance';
                header("Location: withdraw.php?text='$text'");
    }else{
    
    //updating current Balance
    echo $current_balance=$total_amount-$total_withdraw;
    
    //updating users table withdraw ammoount and current ammount
      $sql = "UPDATE users SET current_balance='$current_balance',total_withdrawal='$total_withdraw' WHERE username='$login_session'";

if ($conn->query($sql) === TRUE) {
    // $passs="Password Updated Successfully";
//   header("Location: edit_profile.php?passs=$passs");
} else {
  echo "Error updating record: " . $conn->error;
}

// //saving the withdrawal record
//   $sql = "INSERT INTO withdraw_request (withdrawal_account,withdrawal_ammount,withdrawal_date,withdraw_request_name,statuss) VALUES ('$login_session','$withdraw_amount','$date','$user_name','pending')";

// if (mysqli_query($conn, $sql)) {
//     $text="Your Withdraw Request Submitted Successfully";
//     header("Location: withdraw_history.php?text=$text");
// } else {
//     $error = mysqli_error($conn);
//     echo "ERROR: Could not able to execute  $error";
// }
    }}          
?>