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
        console.log($('.nav-primary__col-1').children().addClass('inactive'))
        console.log($('.nav-primary__col-2').children().addClass('inactive'))

        $('.nav-primary__col-1 .nav-primary__list').children().removeClass('lvl1-active').removeClass('lvl1-inactive');


        let parentNav, childNav

        $(this).parent().addClass('lvl0-active').removeClass('lvl0-inactive').siblings().removeClass('lvl0-active').addClass('lvl0-inactive');

        parentNav = $(this).attr('id');

        childNav = $(`.nav-primary__col-1 .nav-primary__list.${parentNav}`)

        console.log(childNav);


        childNav.removeClass('inactive');
        childNav.siblings().addClass('inactive');


    });

    $('.nav-primary__action.nav-primary__action-lvl-1').on('click', function(){
        let parentNav, childNav

        $(this).parent().addClass('lvl1-active').removeClass('lvl1-inactive').siblings().removeClass('lvl1-active').addClass('lvl1-inactive');

        parentNav = $(this).attr('id');

        childNav = $(`.nav-primary__col-2 .nav-primary__list.${parentNav}`)

        console.log(childNav);


        childNav.removeClass('inactive');
        childNav.siblings().addClass('inactive');

    });

 });
