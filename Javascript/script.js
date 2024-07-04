let bars_close = document.getElementById('bars-close')
let menu = document.getElementById('lista-menus')
let cards = document.getElementsByClassName('card')
let cardLast = cards[cards.length - 1]
cardLast.style.display = 'none'

// Abrindo a barra de navegação
bars.addEventListener('click', function() {
    
    // Abrindo o menu 
    menu.style.display = 'flex'

    // Colocando os icones
    bars.style.display = 'none'
    bars_close.style.display = 'block'

    // Aplicando animação
    menu.style.animationName = 'animacao-menu'
    menu.style.animationDuration = '1.5s'
    menu.style.animationFillMode = 'forwards'

    

})

// Fechando a barra de navegação
fechar_menu = () => {
    
   menu.style.animationName = 'fechar-menu'
   menu.style.animationDuration = '1.5s'
   bars_close.style.display = 'none'
   menu.display = 'none'
   bars.style.display = 'block'
}

// Abrindo a nova aba dos botões
function btn_click_open(url) {
    window.location.href = url
}

//Apresentação do sessão sobre mim
let texto = "Seja muito bem vindo ao meu portifório"
let apresentacao = document.getElementsByClassName('title-into')[0]
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


// Transição dos cards do projeto
function moverCards(direcao) {


        let cardsFist = document.getElementsByClassName('card-1')[0]
        let cardLast = document.getElementsByClassName('card-4')[0]

    if(direcao == 'esquerda') {

        iconLeft = document.querySelector('.icon-left')
        iconRight = document.querySelector('.icon-right')

        iconLeft.className += 'icon-desable '
        iconRight.className = 'fa-solid fa-chevron-up icon-right '

        cardsFist.style.display = 'flex'
        // cardLast.style.display = 'none'
        $(cardLast).hide('slow')
        $(cardsFist).show('slow')

        
    }
    else if(direcao == 'direita') {
        
        iconLeft = document.querySelector('.icon-left')
        iconRight = document.querySelector('.icon-right')

        iconLeft.className = 'fa-solid fa-chevron-up icon-left '
        iconRight.className += 'icon-desable '

        // cardsFist.style.display = 'none'
        $(cardsFist).hide('slow')
        // cardLast.style.display = 'flex'
        $(cardLast).show('slow')
    }
    // console.log(icon)
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