



document.addEventListener("DOMContentLoaded", function() {
    var dropdowns = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
});

const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
    const li = item.parentElement;

    item.addEventListener('click', function () {
        allSideMenu.forEach(i=> {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
})



var notification = document.querySelector('#notification');
var ntfbtn=document.querySelector('.notificon');
ntfbtn.addEventListener('click',()=>{
    notification.classList.toggle('show');
})
    // const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

    // allSideMenu.forEach(item=> {
    //     const li = item.parentElement;
    
    //     item.addEventListener('click', function () {
    //         allSideMenu.forEach(i=> {
    //             i.parentElement.classList.remove('active');
    //         })
    //         li.classList.add('active');
    //     })
    // });
    
    
    
    
    // TOGGLE SIDEBAR

    
 
    
    
    
    
    
   
    
    
    
    
    
        
     