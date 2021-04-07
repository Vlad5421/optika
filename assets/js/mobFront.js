if (document.documentElement.clientWidth < 600) {

    const burgBtn = document.querySelector('.mob-menu')
    const mobMenuWrap = document.querySelector('.mob-menu-wrap')
    const mobMenuGray = document.querySelector('.mob-submenu-gray')
    const mobMenuClose = document.querySelector('.mob-menu-close')

    burgBtn.onclick = () => {
        mobMenuWrap.style.left = 0
        mobMenuGray.style.display = 'block'
    }
    mobMenuClose.onclick = () => {
        mobMenuWrap.style.left = '-100%'
        mobMenuGray.style.display = 'none'
    }
}
