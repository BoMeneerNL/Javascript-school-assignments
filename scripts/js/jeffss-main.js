function login() {
    //getUsername, getPassword
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    //Check Username & Password
    if (username === "" || password === "") alert("oops, no data found (Error_Recieved_NULL_Expected_*++)")
	else if (username === "Jeff" && password === "JeffsPassword")loginshow()
	else if (username === "bigchungus" && password === "bigchungus") loginshow()
	else alert("Oops, your credentials doesn't match with the system knows credentials (err_JJSF_CRNC_0AUTH)")

}
//Welcome Screen
function loginshow() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    alert("Welcome back " + username + ", you have been logged in")
    document.getElementById("welcome").innerHTML = `Welcome \"${username} + \" to this page, do you want to do an action?`;
    loginbuilder()
}

//builder to finish website if logged in
function loginbuilder() {
    //Hide & show login & logout 
    document.getElementById("loghidden").style.display = "initial"
    document.getElementById("yesb1").style.display = "initial"
    document.getElementById("nob1").style.display = "initial"
    document.getElementById("dellog").style.display = "none"
    document.getElementById("username").style.display = "none"
    document.getElementById("password").style.display = "none"
    document.getElementById("clog-reg").innerHTML = "Command/action log"

    //Change title
    document.getElementById("title").innerHTML = "Welcome to this page. an action?, or leaving?"
}