const documentBody = document.querySelector('body');
const searchBtn = document.querySelector('.nav-wrap__search-btn');
const menuBtn = document.querySelector('.nav-wrap__menu-btn');
const searchContainer = document.getElementById('site-search');
const searchBtnClose = document.querySelector('.site-search_btn-close');
const siteNav = document.querySelector('.site-nav');
const siteNavBtnClose = document.querySelector('.nav-header__btn-close');

searchBtn.addEventListener('click', () => {
    searchContainer.classList.remove('closed')
})

searchBtnClose.addEventListener('click', () => {
    searchContainer.classList.add('closed')
})

if(menuBtn){
    menuBtn.addEventListener('click', () => {
        documentBody.classList.add('overflow-hidden');
        siteNav.classList.add('open');
    })
}

if(siteNavBtnClose){
    siteNavBtnClose.addEventListener('click', () => {
        documentBody.classList.remove('overflow-hidden');
        siteNav.classList.remove('open');
    })
}

document.addEventListener("DOMContentLoaded", function(event) {
    //insert code here


    $('.nav-primary__action.nav-primary__action-lvl-0').on('click', function(){
        $(this).parent().addClass('lvl1-active').removeClass('lvl1-inactive').siblings().removeClass('lvl1-active').addClass('lvl1-inactive');
    });

 });
