var logcount = 0;

function getcurrentlog(action) {
    logcount++;
    logger(logcount, action);

}

function logger(jeff, action) {
    if (jeff === 0) {
        console.log("Oops something went wrong (err_noup_logcontroller)");
    } else {
        const logc = "logc" + logcount
        const today = new Date();
        const h = today.getHours();
        const m = today.getMinutes();
        const s = today.getSeconds();
        const d = today.getDate();
        const mo = today.getMonth() + 1;
        const y = today.getUTCFullYear();
        const timestamp = `(${h}:${m}:${s} @ ${d}-${mo}-${y})`
        document.getElementById(logc).style.display = "initial"
        document.getElementById(logc).innerHTML = logcount + ". " + action + timestamp

    }

}