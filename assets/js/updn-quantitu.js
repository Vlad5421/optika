{
    const OptQuantityUp = document.querySelectorAll('.quantity__up')
    const OptQuantityDn = document.querySelectorAll('.quantity__dn')
    const OptBtnUpdate = document.querySelector('button[name="update_cart"]')
    function quantityValueUp(){
        this.nextElementSibling.stepUp()
        if (null != OptBtnUpdate) undissBtn()
    }
    function quantityValueDn(){
        if (this.previousElementSibling.valueAsNumber === 1) {
            return
        } else {
            this.previousElementSibling.stepDown()
            if (null != OptBtnUpdate) undissBtn()
        }
    }
    let undissBtn = () =>{
        if (OptBtnUpdate.attributes['aria-disabled']) delete OptBtnUpdate.attributes['aria-disabled']
        if (OptBtnUpdate.attributes['5']) delete OptBtnUpdate.attributes['5']
        if (OptBtnUpdate.disabled) OptBtnUpdate.disabled = false
    }

    OptQuantityUp.forEach((elem) => {if (null === elem.onclick) elem.onclick = quantityValueUp})
    OptQuantityDn.forEach((elem) => {if (null === elem.onclick) elem.onclick = quantityValueDn})
}
