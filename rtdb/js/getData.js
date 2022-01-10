import {app} from "./app.js"

import { getDatabase,ref,get, child } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js";

const fb = getDatabase(app);

//ref
var testlabel = document.getElementById("testlabel");
var x = 1;
var button_test = document.getElementById("viewData");
var cB = document.getElementById("cOuNt");
function RetrieveData() {
    get(child(ref(fb), "CCs/"+x)).then((snapshot) => {
        if(snapshot.exists()) {
            testlabel.innerHTML = snapshot.val().name;
        }
        else {
            console.log("No data");
        }
    });
}
function Incr() {
    x++;
}

button_test.addEventListener("click", RetrieveData);
cB.addEventListener("click", Incr);