


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