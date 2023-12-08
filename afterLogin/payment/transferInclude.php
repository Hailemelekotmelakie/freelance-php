<?php
if (isset($_POST['search'])) {
                    // senders
                    $funderEmail=$_SESSION['email'];
                    $sendersSqlSt = "SELECT * FROM fundtransactions WHERE funderEmail = '$funderEmail'";
                    $sendersRunSql = mysqli_query($con, $sendersSqlSt);
                    $sendersRowID = mysqli_fetch_assoc($sendersRunSql);

                    // receivers
                    $BankAccount=$_POST['BankAccount'];
                    $sqlSt = "SELECT * FROM fundtransactions WHERE BankAccount = '$BankAccount'";
                    $runSql = mysqli_query($con, $sqlSt);
                    $rowID = mysqli_fetch_assoc($runSql);
                    if (!empty($rowID['funderName'])) {
                      echo " ".$rowID['funderName'];
                        // ///////////////////////////////////////////
                      ?>
                      <form>
                        
                      <div class="my-alert alert alert-info">
                    <img class="my-alert__icon" src="./images/icon-alert.svg" alt>
                    <div class="form-inline ">
                        <h3 style="text-align: center;">Current Balance  <?php echo $sendersRowID['accountBalance']; ?></h3>
                        <div class="input-group input-groupE">
                          <div class="input-group-addon">
                            &nbsp;&nbsp;Transfering Amount in ETB  &nbsp; &nbsp; &nbsp;
                          </div>
                          <input name="temporaryBalance" class="form-control text-center" id="exampleInputAmount" required placeholder="400 ETB" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "5">
                        </div>
                      </div>
                    <div class="my-alert alert alert-warning">
                    <span class="my-alert__text">
                      <p> <span class="numberCircle">1</span>You should pay 5% transaction fee for the Organization</p>
                      <p> <span class="numberCircle">2</span>Pay for Freelancers, when your job is accomplished.</p>
                      <p> <span class="numberCircle">3</span>If sure, You Can Now Press Checkout button.</p>

                    </span>
                    </div>
                  </div>
                      <div class="button-master-container">
                        <div class="button-container tex-center"></div>
                        <input name="sendNow" type="submit" class="btn btn-primary" value="Checkout">
                      </div>
                  </form>
                  <?php
                      // //////////////////////////////////////////////
                    }
                    else{
                      // echo "Not Found In Our Database, Or Please, Try To Correct Number";
                            include('popupFailureNotFound.htm');
                    }
}
else{
  echo "";
}
?>