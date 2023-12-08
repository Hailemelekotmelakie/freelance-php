
function functionOnload(){
	document.getElementById('buttonFinish').style.display="none";
	// document.getElementById('buttonContinue').style.display="block";
	document.getElementById('secondDiv').style.display="none";
	document.getElementById('firstDiv').style.display="inline-block";
	document.getElementById('thirdDiv').style.display="none";
}
// function functionBack(){
// 	document.getElementById('buttonBack').style.display="none";
// 	document.getElementById('buttonFinish').style.display="none";
// 	document.getElementById('buttonContinue').style.display="inline-block";
// 	document.getElementById('firstDiv').style.display="inline-block";
// 	document.getElementById('secondDiv').style.display="none";
// 	document.getElementById('finishDiv').style.display="none";

// }
function functionContinue(){
	document.getElementById('buttonFinish').style.display="inline-block";
	document.getElementById('buttonContinue').style.display="none";
	document.getElementById('firstDiv').style.display="block";
	document.getElementById('secondDiv').style.display="block";

}
function functionFinish(){
	// document.getElementById('buttonBack').style.display="none";
	// document.getElementById('buttonFinish').style.display="none";
	// document.getElementById('buttonBack').style.display="none";
	document.getElementById('thirdDiv').style.display="none";
    document.getElementById('mainDivJobRequest').style.display="";
}
