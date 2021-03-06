/*Html elements function serviceRotate*/
services = document.getElementsByClassName('serviceContainer_Services');
logo = document.getElementById('logoContainer_Logo_Img');
let logo_Height = logo.clientHeight;
/*Html elements function showNavbar */
logoContainer = document.getElementById('logoContainer');
hiddenNav = document.getElementById('hiddenNavbar');
let logoContainer_Height = logoContainer.clientHeight;


/* ADD class on servicesContainer */
window.addEventListener('scroll', function serviceRotate(){
    /*Get the scroll height and compar with header img height */
    if(window.scrollY > logo_Height){
        /*Loop on HTLM Collection for add class on each element*/
        for(let i = 0; i < services.length ; i++){
            services[i].classList.add('containerRotate');
        }
    }
}); 


/* Function for show or hide navbar*/
window.addEventListener('scroll', function showNavbar(){
    /*Get the scroll height and compar with header height */
    if(window.scrollY > logoContainer_Height){
        /*      Change navbar display   */ 
        hiddenNav.classList.add('show');
    }
    else{
        hiddenNav.classList.remove('show');
    }
});
