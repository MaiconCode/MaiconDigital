let bars_close = document.getElementById('bars-close')
let menu = document.getElementById('lista-menus')

// Abrindo a barra de navegação
bars.addEventListener('click', function() {
    
    // Abrindo o menu 
    menu.style.display = 'flex'

    // Aplicando animação
    menu.style.animationName = 'animacao-menu'
    menu.style.animationDuration = '1.5s'
    menu.style.animationFillMode = 'forwards'

    // Colocando os icones
    bars_close.style.display = 'block'
    bars.style.display = 'none'

})

// Fechando a barra de navegação
bars_close.addEventListener('click', function() {
    
   menu.style.animationName = 'fechar-menu'
   menu.style.animationDuration = '1.5s'
   bars_close.style.display = 'none'
   menu.display = 'none'
   bars.style.display = 'block'
})

// Abrindo a nova aba dos botões
function btn_click_open(url) {
    window.location.href = url
}

// Apresentação do sessão sobre mim
let texto = "Welcome to the my website"
let apresentacao = document.getElementsByClassName('subtitulo')[0]
let indice = 0
apresentacao.innerHTML = ''

textoArray = texto.split('')

let delay = setInterval(function(){
    let tempo = setInterval(function(){
        apresentacao.innerHTML += textoArray[indice]
        indice += 1
    
        if(indice == textoArray.length) {
            clearInterval(tempo)
        }
        clearTimeout(delay)
    }, 100)
}, 2000)

// ======== Navegação com site com uso scroll e menu 
function scrollNav(x, y) {
    window.scrollTo(x, y)
}

// =================== Animação com as sessões através do scroll ==================//
//====================================================================================//

const MyObserver = new IntersectionObserver((entries) => {
    
    entries.forEach( (entry) => {

        if(entry.isIntersecting) {
            entry.target.classList.add('show')
        } else {
            entry.target.classList.remove('show')
        }
    })
})

const elements = document.querySelectorAll('.hidden')

elements.forEach(el => {
    MyObserver.observe(el)
})