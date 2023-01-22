window.sr=ScrollReveal();

    sr.reveal('.fijado',{
        duration: 1500,
        origin: 'bottom',
        distance: '-100px'
    });

    sr.reveal('.content-b1',{
        duration: 2000,
        origin: 'top',
        distance: '-100px'
    });

    sr.reveal('.content-bi',{
        duration: 2000,
        origin: 'top',
        distance: '-100px'
    });

    (function(){
        const titleQuestions = [...document.querySelectorAll('.desplegable-title')];
        console.log(titleQuestions)
    
        titleQuestions.forEach(question =>{
            question.addEventListener('click', ()=>{
                let height = 0;
                let answer = question.nextElementSibling;
                let addPadding = question.parentElement.parentElement;
    
                addPadding.classList.toggle('desplegable-padding--add');
                question.children[0].classList.toggle('desplegable-arrow--rotate');
    
                if(answer.clientHeight === 0){
                    height = answer.scrollHeight;
                }
    
                answer.style.height = `${height}px`;
            });
        });
    })();