
const typing = document.querySelector('[data-js="typing"]');


const message = ['Desenvolvendo Idéias', 'Desenvolvendo Soluções', 'Desenvolvendo Sonhos'];

let messageIndex = 0
let characterIndex = 0
let currentMessage = ''
let currentCharacters = ''
console.log(typing);
let cont = 200;

const type = () => {




    if(messageIndex === message.length){
        messageIndex = 0;
    }

    currentMessage = message[messageIndex]
    currentCharacters = currentMessage.slice(0, characterIndex++)
    typing.textContent = currentCharacters;
    cont = cont*messageIndex;
    if(currentCharacters.length === currentMessage.length){
        messageIndex++
        characterIndex = 0
        
     }



}

setInterval(type, 200);