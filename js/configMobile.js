const toogleNavbarMobile = (e) =>{
    
    if (e.type === 'touchstart'){
        e.preventDefault();
    }
    e.target.classList.toggle("change");

    let nav = document.querySelector('.container-header .nav-header');
    nav.classList.toggle("active");
    let active = nav.classList.contains('active');

    if (active){
        e.currentTarget.setAttribute('aria-expanded', 'true')
    }else{
        e.currentTarget.setAttribute('aria-expanded', 'false')
    }
}

document.getElementById('navbar-mobile').addEventListener("click", toogleNavbarMobile);
document.getElementById('navbar-mobile').addEventListener("touchstart", toogleNavbarMobile);