const allSideMenu = document.querySelectorAll('#sidebar .side-menu li a ');
allSideMenu.forEach(irem=> {
    const li = item.parentElement;

    item.addEventListener('click',function(){
        allSideMenu.forEach(i=> {
            i.parentElement.classList.remove('active')
        })
        li.classList.add('active');
    })
});


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click'. function (){
    sidebar.classList.toggle('hide')
})



if(window.innerWidth < 768){
    sidebar.classList.add('hide');
}else if(window.innerWidth < 576) {
    const searchButton = document.querySelector('#content nav form .form-input button');
    const searchForm   = document.querySelector('#content nav form ');

    searchButton.addEventListener('click'. function (e){
        e.preventDefault();
        searchForm.classList.toggle('show');
    })
}