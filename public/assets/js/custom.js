function changer(){
 var i = document.getElementById("refer").selectedIndex;
var currency = document.getElementById("refer").options[i].value;
    if (currency == "0")
   {
   /* document.getElementById("rc").style.visibility = "hidden";*/
   $('#rcing').hide();
   } else{
    $('#rcing').show();
   }
}

function changer2(){
 var i = document.getElementById("cate").selectedIndex;
var currency = document.getElementById("cate").options[i].value;
    if (currency == "free")
   {
   /* document.getElementById("rc").style.visibility = "hidden";*/
   $('#terms').value = "I am testing"
   document.getElementById("terms").innerHTML = "<strong>TERMS AND CONDITIONS FOR FREE FALL CATEGORY</strong><ol><li> Register with 25,000 naira without referring anyone, The system will automatically assign 3 people to your tree... But you'll only be check out with up to 5 million naira in 7 month</li><li>For every person you introduce, you also get an extra 15% of 10 million</li><li>You are not liable to any form of Incentives</li></ol>";
   } else{
    document.getElementById("terms").innerHTML = "<strong>TERMS AND CONDITIONS FOR HELP SYSTEM CATEGORY</strong><ol><li> Register with 25,000 naira and also introduce 3 people to the system who are to sign up with your referral code within 21 days.... You'll check out of the system with 10 million naira in 7 months max</li><li>For every one person extra person you introduce, you get an extra 15% of 10 million</li><li>This also qualifies you for other amazing incentives which would be disclosed on November 1st</li></ol>";
   }
}