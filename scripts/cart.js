let list = [
    '<div class="card mx-auto col-md-3 w-50 col-10 mt-5 pt-4"><div class="d-flex  flex-row-reverse"><button type="button" class="btn-close text-reset"></button></div> <img class="mx-auto img-thumbnail" src="../styles/img/1.webp" width="auto" height="auto" /><div class="card-body text-center mx-auto"><h5 class="card-title">Мужской классический деловой костюм</h5><p class="card-text">6 962,00 ₽</p></div></div>',
    '<div class="card mx-auto col-md-3 w-50 col-10 mt-5 pt-4"><div class="d-flex  flex-row-reverse"><button type="button" class="btn-close text-reset"></button></div> <img class="mx-auto img-thumbnail" src="../styles/img/2.webp" width="auto" height="auto" /><div class="card-body text-center mx-auto"><h5 class="card-title">Мужской классический деловой костюм</h5><p class="card-text">6 136,00 ₽</p></div></div>'
]
/*
function insertList(htmlStr){
    let frag = document.createDocumentFragment()
    let temp = document.createElement('div')
    temp.innerHTML = htmlStr;

    while(temp.firstChild){
        frag.appendChild(temp.firstChild)
    }
    return frag
}

function refreshList(){
    let fragments = [];

    for(let i=0; i<list.length; i++){
        fragments.push(insertList(list[i]))
    }

    document.getElementById('cart-container').innerHTML = ''

    for(let i=0; i<fragments.length; i++){
        let cart = document.getElementById('cart-container')
        cart.appendChild(fragments[i])
    }
}

window.onload = function(){
    let fragments = [];

    for(let i=0; i<list.length; i++){
        fragments.push(insertList(list[i]))
    }

    document.getElementById('cart-container').innerHTML = ''

    for(let i=0; i<fragments.length; i++){
        let cart = document.getElementById('cart-container')
        cart.appendChild(fragments[i])
    }
    
}
*/

jQuery(document).ready(function(){
    let fragments = [];

    for(let i=0; i<list.length; i++){
        fragments.push(insertList(list[i]))
    }

    document.getElementById('cart-container').innerHTML = ''

    for(let i=0; i<fragments.length; i++){
        let cart = document.getElementById('cart-container')
        cart.appendChild(fragments[i])
    }
    
})
