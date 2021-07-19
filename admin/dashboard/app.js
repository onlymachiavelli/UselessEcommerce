//alert("NOT REPONSIVE !")

const Edit = (bl) => {
    if (bl) {
        document.getElementsByClassName("pass")[0].style.display = "none"
        document.getElementsByClassName("user")[0].style.display = "block"
    }
    else {
        document.getElementsByClassName("user")[0].style.display = "none"
        document.getElementsByClassName("pass")[0].style.display = "block"
    }
}



const ShowMsg = (indice) => {
    let id = Number(document.getElementById("id").innerHTML)
    let Array = []
    for (let i = 0; i <= id; i++) {
        Array.push(document.getElementById("m" + String(i)).innerHTML)
    }

    document.getElementsByClassName("txt_message")[0].innerHTML = Array[indice]
    document.getElementsByClassName("messageROOT")[0].style.display = "block"

}

const Close = (cls) => {
    document.getElementsByClassName(cls)[0].style.display = "none";
}
const AddNote = () => {
    document.getElementsByClassName("addnoteROOT")[0].style.display = "block"
    console.log("asba")
}


const Fl = () => {
    document.getElementById("upbtn").click();
    setTimeout(() => {
        document.title += " ", document.getElementById("upbtn").value
    }, 1000);
}
const AddPRD = () => {
    document.getElementsByClassName("add_prodROOT")[0].style.display = "block"
}
const UpdateNote = (note, titl) => {
    document.getElementsByClassName("create")[0].style.display = "none"
    document.getElementsByClassName("update")[0].style.display = "block"
    document.getElementsByName("notetitle").innerHTML = document.getElementById(titl).innerHTML
    document.getElementsByName("note").innerHTML = document.getElementById(note).innerHTML
    AddNote()

}
/*

var page = 1
var arr = ["hm", "prd", "msg", "rep", "changes"]
var arra = ["home", "products", "message", "report", "edit"]
var pagetitle = [
    "Home",
    "Products",
    "Messages",
    "Reports",
    "Edit"
]
const CancelPages = () => {
    let i
    for (i = 0; i < arr.length; i++) {
        if (arr[i] === "rep") {
            document.getElementsByClassName(`"`, arr[i], `"`)[0].style.background = "rgb(214, 148, 6)"

        }
        else {
            document.getElementsByClassName(`"`, arr[i], `"`)[0].style.background = "none"
        }
    }
    for (i = 0; i < arra.length; i++) {
        document.getElementsByClassName(`"`, arr[i], `"`)[0].style.display = "none"
    }

}
console.log(arr)


const Pchange = (cls) => {
    CancelPages()
    document.getElementsByClassName(`"`, cls, `"`)[0].style.background = "#e93737"
    let j
    for (j = 0; j < arr.length; j++) {
        if (arr[j] == cls) {
            break
        }
    }
    document.title = pagetitle[j]
    document.getElementsByClassName(`"`, arra[j], `"`)[0].style.display = "block"
}

*/