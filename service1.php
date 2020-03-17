<style> #number, #account, #amount {display: none} 
        form     {margin: auto; border: 3px solid brown; padding: 20px; width: 500px; background-color: beige; font-family: Georgia, serif; }
    body {

        background-image: url("NjitBack.jpg");
    } 

</style>

<form action = "service2.php">
    
    <input type="radio" name="choice" value="list" id="similar" onclick="Retrieve()" >List accounts and transactions <br>
    <input type="radio" name="choice" value="perform" id="similar" onclick="Transact()">Perform transactions <br>
    <input type="radio"  name="choice"  value="clear" id="similar" onclick="Clears()">Clear <br><br>

    <div id="number"> Enter number of transactions to show per account <input type='text' name='number'><br></div>
    <div id="account">Enter account for transactions <input type='text' name='account'><br>    </div>
    <div id= "amount"> Enter amount of transaction <input type=text name='amount'>  <br><br></div><br><br> 

    <input type = submit>
</form>

<script>
    var ptrNumber =  document.getElementById("number");
    var ptrAccount =  document.getElementById("account");
    var ptrAmount =  document.getElementById("amount");

function Retrieve() {  
    ptrNumber.style.display = "block";
    ptrAccount.style.display = "none";
    ptrAmount.style.display = "none";
}
function Transact() {
    ptrNumber.style.display = "none";
    ptrAmount.style.display = "block";
    ptrAccount.style.display = "block";
}

function Clears() {
    ptrNumber.style.display = "none";
    ptrAccount.style.display = "none";
    ptrAmount.style.display = "block";
}

</script>
