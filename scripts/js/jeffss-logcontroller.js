var logcount = 0;

function getcurrentlog(action) {
    logcount++;
    logger(logcount, action);

}

function logger(jeff, action) {
    if (jeff == 0) {
        console.log("Oops something went wrong (err_noup_logcontroller)");
    } else {
        logc = "logc" + logcount
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        var d = today.getDate();
        var mo = today.getMonth() + 1;
        var y = today.getUTCFullYear();
        timestamp = " ( " + h + ":" + m + ":" + s + " @ " + d + "-" + mo + "-" + y + " )"
        document.getElementById(logc).style.display = "initial"
        document.getElementById(logc).innerHTML = logcount + ". " + action + timestamp
        
    }

}