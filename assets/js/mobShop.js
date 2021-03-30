if (document.documentElement.clientWidth < 420) {

    const filterWidget = document.querySelector('.widget-area')
    document.body.appendChild(filterWidget)
    const mobFilterShop = document.createElement('div')
    mobFilterShop.innerHTML = 'Подобрать товар'
    mobFilterShop.classList.add('mobFilterShop')
    document.body.appendChild(mobFilterShop)
    const mobFilterShopClose = document.createElement('i')
    let filterOpened = false
    mobFilterShop.onclick = () => {
        if (filterOpened) {
            filterWidget.style.left = "-100%"
            mobFilterShop.innerHTML = 'Подобрать товар'
            filterOpened = false
        } else {
            filterWidget.style.left = 0
            mobFilterShop.innerHTML = 'Скрыть фильтр'
            filterOpened = true
        }
    }
}