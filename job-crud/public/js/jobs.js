const options = document.getElementById("options");
const shownOptions = document.getElementsByClassName("update-delete-modal-container");
const cancelShownOptions = document.getElementsByClassName("cancel");

console.log(cancelShownOptions[0])

options.addEventListener('click', function(){
    shownOptions[0].classList.add("active")
})

cancelShownOptions[0].addEventListener('click', function(){
    shownOptions[0].classList.remove("active")
})

