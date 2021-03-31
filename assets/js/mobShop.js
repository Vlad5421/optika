if (document.documentElement.clientWidth < 420) {

    const filterWidget = document.querySelector('.widget-area')
    const sortirovka = document.querySelector('.linz_sortirovat')
    document.body.appendChild(filterWidget)
    
    // Создаем кнопку закрывания фильтра
    const mobFilterShopClose = document.createElement('i')
    mobFilterShopClose.classList.add('fa')
    mobFilterShopClose.classList.add('fa-times')
    mobFilterShopClose.style.cssText = 'position: absolute;right: 0;top: 0;padding: 10px;font-size: 20px;'
    filterWidget.appendChild(mobFilterShopClose)

    // Создаем кнопку фильтра при закрытом фильтре
    const filterBtn = document.createElement('div')
    filterBtn.classList.add('filter_btn')
    filterBtn.innerHTML = 'Подобрать товар'
    sortirovka.innerHTML = ''
    sortirovka.appendChild(filterBtn)

    let filterOpened = false
    filterBtn.onclick = () => {
        if (filterOpened) {
            filterWidget.style.left = '-100%'
            document.querySelector('.mob-submenu-gray').style.display = 'none'
            filterOpened = false
        } else {
            filterWidget.style.left = 0
            document.querySelector('.mob-submenu-gray').style.display = 'block'
            filterOpened = true
        }
    }
    mobFilterShopClose.onclick = () => {
        filterWidget.style.left = '-100%'
        document.querySelector('.mob-submenu-gray').style.display = 'none'
        filterOpened = false
    }

}