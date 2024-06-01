let bars_close = document.getElementById('bars-close')
let menu = document.getElementById('lista-menus')

bars.addEventListener('click', function() {
    
    // Abrindo o menu 
    let div_btn_menu = document.getElementById('icon-btn-menu')
    menu.style.display = 'flex'

    // Aplicando animação
    menu.style.animationName = 'animacao-menu'
    menu.style.animationDuration = '1.5s'
    menu.style.animationFillMode = 'forwards'

    // Colocando os icones
    bars_close.style.display = 'block'
    bars.style.display = 'none'

})

bars_close.addEventListener('click', function() {
    
//    menu.style.display = 'block'
   menu.style.animationName = 'fechar-menu'
   menu.style.animationDuration = '1.5s'
   bars_close.style.display = 'none'
   menu.display = 'none'
   bars.style.display = 'block'
   
})
