document.title = "Bachmanity Watches"
const Search = () => {
    document.getElementsByClassName("search_block")[0].style.display = "block"

}
const Close = () => {
    document.getElementsByClassName("search_block")[0].style.display = "none"
}
const icon = [
    `<i class="fa fa-clock-o" aria-hidden="true"></i>`,
    `<i class="fa fa-car" aria-hidden="true"></i>`,
    `<i class="fa fa-mobile" aria-hidden="true"></i>`,
    `<i class="fa fa-laptop" aria-hidden="true"></i>`,
    `<i class="fa fa-desktop" aria-hidden="true"></i>`,
    `<i class="fa fa-male" aria-hidden="true"></i>`
]
const title = [
    `Watches`,
    `Cars`,
    `Mobile Phones`,
    `Laptops`,
    `Computers`,
    `Humans`
]
const cat = document.getElementsByClassName("centt")[0]
for (let i = 0; i < 6; i++) {
    cat.innerHTML += `
        <div class="catblock">
            <div id="center">
                <div class="cat_img">
                    ${icon[i]}
                </div>
                <p class="cat_title">
                    ${title[i]}
                </p>
            </div>
        </div>
    `
    if (i === 2) {
        cat.innerHTML += "<br/>"
    }
}

const ShowFX = (doc, bl) => {
    if (bl) {
        doc.style.display = "block"
    }
    else {
        doc.style.display = "none"
    }
}
const SideBar = (bool) => {
    if (bool) {
        document.getElementsByClassName("side-bar")[0].style.width = "0%"
        document.getElementsByClassName("screen")[0].style.width = "100%"
        setTimeout(ShowFX(document.getElementsByClassName("fx")[0], true), 3000)
    }
    else {
        document.getElementsByClassName("side-bar")[0].style.width = "5%"
        document.getElementsByClassName("screen")[0].style.width = "95%"
        setTimeout(ShowFX(document.getElementsByClassName("fx")[0], false), 3000)
    }
}






/**/
const scl = document.getElementById("scl")
let p
l = [
    `<a href="#" id="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>`,
    `<a href="#" id="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>`,
    `<a href="#" id="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>`
]
for (p = 0; p < 3; p++) {
    scl.innerHTML += l[p]
}



const support = document.getElementById("support")
let d
let lis = [
    `<a href="#">Report</a>`,
    `<a href="#">FAQ</a>`,
    `<a href="#">Rules</a>`,
    `<a href="#">Help</a>`,
    `<a href="#">About</a>`
]
for (d = 0; d < lis.length; d++) {
    support.innerHTML += lis[d]
}

const linki = document.getElementById("links")
let t
let list = [
    `<a href="index.php">Home</a>`,
    `<a href="#">Contact Us</a>`,
    `<a href="#">All The Products</a>`,
    `<a href="#">About</a>`
]
for (t = 0; t < list.length; t++) {
    linki.innerHTML += list[t]
}