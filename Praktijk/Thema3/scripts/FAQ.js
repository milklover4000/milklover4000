/**
 Author: Arda Agar
 Date: 24-2-22

 praktijkopdracht T3
 */
// an array with the questions
var questions = ["wat voor soort abonnementen zijn er?" , "Wat voor vecht sport bieden we aan" , "wanneer/hoelaat beginnen de lessen?", "Waar kunnen we vechtsporten gaan leren?"];

// an array with the answers to the questions
var answer = ["je hebt vier verschillende abonnementen. een onbeperkt, overdag, duo abonnement en een all in abonnement. om meer te weten wat er in een bundle zit kunt u naar de abonnementen pagina." , "we bieden, MMA, (kinder en lady's)boksen, kickboksen en free fighting" , " Een paar voorbeelden zijn: maandag: 18:00 tot 19:00 kickbocksen. en op Donderdag: 19:30 tot 20:30 tai chi", "om verschillende vechtsporten te leren moet u naar onze oude locatie, Vogelplein 2a," +
"5212 VK 's-Hertogenbosch"];

// a button that shows the answer to the first question and hides the other elements
function Button1()
{
    document.getElementById("Vraag1").innerHTML = (answer[0]);
    document.getElementById("Vraag1").style.visibility ="visible";
    document.getElementById("Button1").style.visibility ="hidden";
    document.getElementById("CloseButton1").style.visibility ="visible";
    document.getElementById("Vraag1").style.display ="inline";
    document.getElementById("Vraag2").style.display ="none";
    document.getElementById("CloseButton2").style.visibility ="hidden";
    document.getElementById("Button2").style.visibility ="visible";
    document.getElementById("Vraag3").style.display ="none";
    document.getElementById("CloseButton3").style.visibility ="hidden";
    document.getElementById("Button3").style.visibility ="visible";
    document.getElementById("Vraag4").style.display ="none";
    document.getElementById("CloseButton4").style.visibility ="hidden";
    document.getElementById("Button4").style.visibility ="visible";
}
// a button that closes the answer of the first one
function CloseButton1()
{
    document.getElementById("CloseButton1").style.visibility ="visible";
    document.getElementById("Button1").style.visibility ="hidden";
    document.getElementById("Vraag1").style.display ="none";
    document.getElementById("CloseButton1").style.visibility ="hidden";
    document.getElementById("Button1").style.visibility ="visible";
}
// a button that shows the answer to the second question and hides the other elements
function Button2()
{
    document.getElementById("Vraag2").innerHTML = (answer[1]);
    document.getElementById("Vraag2").style.visibility ="visible";
    document.getElementById("Button2").style.visibility ="hidden";
    document.getElementById("CloseButton2").style.visibility ="visible";
    document.getElementById("Vraag2").style.display ="inline";
    document.getElementById("Vraag1").style.display ="none";
    document.getElementById("CloseButton1").style.visibility ="hidden";
    document.getElementById("Button1").style.visibility ="visible";
    document.getElementById("Vraag3").style.display ="none";
    document.getElementById("CloseButton3").style.visibility ="hidden";
    document.getElementById("Button3").style.visibility ="visible";
    document.getElementById("Vraag4").style.display ="none";
    document.getElementById("CloseButton4").style.visibility ="hidden";
    document.getElementById("Button4").style.visibility ="visible";
}
// a button that closes the answer of the second one
function CloseButton2()
{
    document.getElementById("CloseButton2").style.visibility ="visible";
    document.getElementById("Button2").style.visibility ="hidden";
    document.getElementById("Vraag2").style.display ="none";
    document.getElementById("CloseButton2").style.visibility ="hidden";
    document.getElementById("Button2").style.visibility ="visible";
}
// a button that shows the answer to the third question and hides the other elements
function Button3()
{
    document.getElementById("Vraag3").innerHTML = (answer[2]);
    document.getElementById("Vraag3").style.visibility ="visible";
    document.getElementById("Button3").style.visibility ="hidden";
    document.getElementById("CloseButton3").style.visibility ="visible";
    document.getElementById("Vraag3").style.display ="inline";
    document.getElementById("Vraag1").style.display ="none";
    document.getElementById("CloseButton1").style.visibility ="hidden";
    document.getElementById("Button1").style.visibility ="visible";
    document.getElementById("Vraag2").style.display ="none";
    document.getElementById("CloseButton2").style.visibility ="hidden";
    document.getElementById("Button2").style.visibility ="visible";
    document.getElementById("Vraag4").style.display ="none";
    document.getElementById("CloseButton4").style.visibility ="hidden";
    document.getElementById("Button4").style.visibility ="visible";
}
// a button that closes the answer of the third one
function CloseButton3()
{
    document.getElementById("CloseButton3").style.visibility ="visible";
    document.getElementById("Button3").style.visibility ="hidden";
    document.getElementById("Vraag3").style.display ="none";
    document.getElementById("CloseButton3").style.visibility ="hidden";
    document.getElementById("Button3").style.visibility ="visible";
}
// a button that shows the answer to the last question and hides the other elements
function Button4()
{
    document.getElementById("Vraag4").innerHTML = (answer[3]);
    document.getElementById("Vraag4").style.visibility ="visible";
    document.getElementById("Button4").style.visibility ="hidden";
    document.getElementById("CloseButton4").style.visibility ="visible";
    document.getElementById("Vraag4").style.display ="inline";
    document.getElementById("Vraag1").style.display ="none";
    document.getElementById("CloseButton1").style.visibility ="hidden";
    document.getElementById("Button1").style.visibility ="visible";
    document.getElementById("Vraag2").style.display ="none";
    document.getElementById("CloseButton2").style.visibility ="hidden";
    document.getElementById("Button2").style.visibility ="visible";
    document.getElementById("Vraag3").style.display ="none";
    document.getElementById("CloseButton3").style.visibility ="hidden";
    document.getElementById("Button3").style.visibility ="visible";

}
// a button that closes the answer of the last one
function CloseButton4()
{
    document.getElementById("CloseButton4").style.visibility ="visible";
    document.getElementById("Button4").style.visibility ="hidden";
    document.getElementById("Vraag4").style.display ="none";
    document.getElementById("CloseButton4").style.visibility ="hidden";
    document.getElementById("Button4").style.visibility ="visible";
}

// showing the question in html by id
    document.getElementById("question1").innerHTML = questions[0];
    document.getElementById("question2").innerHTML = questions[1];
    document.getElementById("question3").innerHTML = questions[2];
    document.getElementById("question4").innerHTML = questions[3];