(function(){
    let items = document.querySelectorAll('.news-section__item-mini')
    // console.log(items)
    items.forEach((it) => {
        if (it.offsetHeight < 350) {
            it.style.minHeight = "360px"
        }
    })
    let firstItem = document.querySelector('.news-section__item')
    // console.log(items)
    
        if (firstItem.offsetWidth < 300) {
            firstItem.style.width = "100%"
        }
}())
