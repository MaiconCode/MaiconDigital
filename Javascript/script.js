let bars_close = document.getElementById('bars-close')
let menu = document.getElementById('lista-menus')
let cards = document.getElementsByClassName('card')
let cardLast = cards[cards.length - 1]
cardLast.style.display = 'none'

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

    let bars_close = document.getElementById('bars-close')
    let janelaLagura = window.innerWidth
    display_bars_close = bars_close.style.display

    console.log(janelaLagura)
    
    console.log(display_bars_close)

    if(display_bars_close == 'block') {
        fechar_menu()
    }

    if(janelaLagura <= 1022 && janelaLagura > 768) {
        console.log('lagura no tablet')
        console.log(y)

        switch (y) {

            case 700:
                
                let project = document.getElementById('section-project')
                console.log(project.getBoundingClientRect())
                break;
            case 1150:
                y += 400
                break;
            case 1800:
                y += 600
                break;
        
            default:
                break;
        }

    } else if(janelaLagura < 768) {
        console.log('lagura no celular')
    }

    window.scrollTo(x, y)
}

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
        cardLast.style.display = 'none'
        
    }
    else if(direcao == 'direita') {
        
        iconLeft = document.querySelector('.icon-left')
        iconRight = document.querySelector('.icon-right')

        iconLeft.className = 'fa-solid fa-chevron-up icon-left '
        iconRight.className += 'icon-desable '

        cardsFist.style.display = 'none'
        cardLast.style.display = 'flex'
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