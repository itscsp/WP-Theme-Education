
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
<a href="#main-content" class="skip-to-content " aria-label="<?php wp_title( '|', true, 'right' ); ?>">Skip to main content</a>

<header class="site-header">
    <div class="site-header__wrapper">
        <div class="site-header__brand">
            <div class="site-logo">
                <a href="" class="logo__wrap" rel="home">
                    <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/Harvard_University_logo.svg.png' ); ?>" alt="<?php //site name ?>">
                </a>
            </div>
            <div class="site-trigger">
                <div class="site-trigger__notifiaction">
                    <div class="notification-wrap">
                        <ul class="notification-wrap__branch">
                            <li class="notifaction-item">
                                <a href="#">Latest COVID Information</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="site-trigger__nav-wrap">
                    <div class="nav-wrap__search">
                        <button class="nav-wrap__search-btn">

                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0z"/></svg>

                            <span>Search</span>
                        </button>
                        <div class="site-search closed" id="site-search">
                            <div class="site-search__wrapper">
                                <form class="site-search__inner">
                                    <input type="text" class="site-search__input" placeholder="Search Harvard University">
                                    <div class="site-search_btn-wrapper">
                                        <button type="submit" class="site-search_btn-submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0z"/></svg>
                                        </button>
                                        <hr>
                                        <button type="reset" class="site-search_btn-close">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="currentColor"><path d="M16.34 9.322a1 1 0 1 0-1.364-1.463l-2.926 2.728L9.322 7.66A1 1 0 0 0 7.86 9.024l2.728 2.926l-2.927 2.728a1 1 0 1 0 1.364 1.462l2.926-2.727l2.728 2.926a1 1 0 1 0 1.462-1.363l-2.727-2.926l2.926-2.728Z"/><path fill-rule="evenodd" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12Zm11 9a9 9 0 1 1 0-18a9 9 0 0 1 0 18Z" clip-rule="evenodd"/></g></svg>
                                        </button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <span class="divider"></span>
                    <div class="nav-wrap__menu">
                        <button class="nav-wrap__menu-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M3 7a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1Zm0 6a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1Z" clip-rule="evenodd"/></svg>
                            <span>Menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-nav">
            <div class="site-nav__header">
                <a href="" class="logo__wrap" rel="home">
                    <div class="nav-header__logo">

                    </div>
                </a>
                <div class="nav-header__btn">
                    <button class="nav-header__btn-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="currentColor"><path d="M16.34 9.322a1 1 0 1 0-1.364-1.463l-2.926 2.728L9.322 7.66A1 1 0 0 0 7.86 9.024l2.728 2.926l-2.927 2.728a1 1 0 1 0 1.364 1.462l2.926-2.727l2.728 2.926a1 1 0 1 0 1.462-1.363l-2.727-2.926l2.926-2.728Z"/><path fill-rule="evenodd" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12Zm11 9a9 9 0 1 1 0-18a9 9 0 0 1 0 18Z" clip-rule="evenodd"/></g></svg>
                            <span>Close</span>
                    </button>
                </div>
            </div>
            <div class="site-nav__main nav-primary">
                <div class="nav-primary__col-0">
                    <ol class="nav-primary__list">
                        <li class="nav-primary__item">
                            <button class="nav-primary__action nav-primary__action-lvl-0 nav-primary__action--has-children">
                                <span class="nav-primary__action-text">
                                Academics
                                </span>
                            </button>
                        </li>
                        <li class="nav-primary__item">
                            <button class="nav-primary__action nav-primary__action-lvl-0 nav-primary__action--has-children">
                                <span class="nav-primary__action-text">
                                Campus
                                </span>
                            </button>
                        </li>
                        <li class="nav-primary__item">
                            <button class="nav-primary__action nav-primary__action-lvl-0 nav-primary__action--has-children">
                                <span class="nav-primary__action-text">
                                In Focus
                                </span>
                            </button>
                        </li>
                        <li class="nav-primary__item">
                            <button class="nav-primary__action nav-primary__action-lvl-0 nav-primary__action--has-children">
                                <span class="nav-primary__action-text">
                                Visit
                                </span>
                            </button>
                        </li>
                        <li class="nav-primary__item">
                            <button class="nav-primary__action nav-primary__action-lvl-0 nav-primary__action--has-children">
                                <span class="nav-primary__action-text">
                                About
                                </span>
                            </button>
                        </li>
                    </ol>
                </div>
                <div class="nav-primary__col-1">
                <h1>hello</h1>

                </div>
                <div class="nav-primary__col-2">
                <h1>hello</h1>

                </div>
            </div>
            <div class="site-nav__footer">
                <nav class="nav-footer__links">
                    <div class="nav-footer__links-wrapper">
                        <div class="nav-footer__label">

                                Quick Links
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="m9.005 4l8 8l-8 8L7 18l6.005-6L7 6z"/></svg>

                        </div>
                        <ol class="nav-footer__items">
                            <li class="nav-footer__item">
                                <a href="#">A to Z Index</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#">Find a Person</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#">Events</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#">Media Relation</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#">Alumi</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#">Give Now</a>
                            </li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
