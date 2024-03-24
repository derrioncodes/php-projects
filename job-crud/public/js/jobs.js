// const options = document.getElementById("options");
// const shownOptions = document.getElementsByClassName("update-delete-modal-container");
// const cancelShownOptions = document.getElementsByClassName("cancel");

// console.log(cancelShownOptions[0])

// options.addEventListener('click', function(){
//     shownOptions[0].classList.add("active")
// })

// cancelShownOptions[0].addEventListener('click', function(){
//     shownOptions[0].classList.remove("active")
// })

const options = document.querySelectorAll(".job-options");

options.forEach(function(option){
    option.addEventListener("click", function (e) {
        const job = e.currentTarget.nextSibling.nextElementSibling;

        job.classList.add("active")

        const cancelIt = e.currentTarget.nextSibling.nextElementSibling.children[2];
        
        cancelIt.addEventListener("click", function(){
            job.classList.remove("active")
        })
        
    })
})

