<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LigueTalk</title>

    <link rel="icon" type="image/png" href="img/favicon-liguetalk.png">

    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./node_modules/block-ui/jquery.blockUI.js"></script>
    <script src="./node_modules/sal.js/dist/sal.js"></script>

    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-202559059-1">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-202559059-1');
    </script>
            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/60eb6033d6e7610a49aac1e8/1fabmvj7h';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
            <!--End of Tawk.to Script-->
  </head>
  <body class="mt-28">
    <header id="topo">
      <!-- <nav class="fixed inset-x-0 top-0">
        <div class="relative container bg-white top-0 inset-x-0 z-10 flex p-5 md:px-12 lg:px-16 xl:mx-auto justify-between items-center border-b shadow-md"> -->
      <nav class="fixed inset-x-0 top-0 bg-white w-full border-b shadow-md" style="z-index:99999;">
        <div class="relative container top-0 inset-x-0 flex p-5 md:px-6 lg:px-12 mx-auto justify-between items-center" >
          <figure>
            <a href="#introducao" class="scroll">
              <img class="h-14 w-full" src="img/logo.png" alt="Logo LigueTalk" />
            </a>
          </figure>

          <div class="menu-top space-x-3 hidden sm:block">
            <a class="scroll hover:text-blue-600 active transition-all duration-300" href="#introducao">Introdução</a>
            <a class="scroll hover:text-blue-600 transition-all duration-300" href="#funcionamento">Como Funciona</a>
            <a class="scroll hover:text-blue-600 transition-all duration-300" href="#contato">Contate-nos</a>


            <a class="font-bold hover:text-blue-600 transition-all duration-300 text-lg" href="https://sistema.liguetalk.com.br/index.php">Logar</a>
          </div>

          <button class="btnMenuMobile block sm:hidden">
            <hr>
            <hr>
            <hr>

          </button>
        </div>
        <div class="menu-top menuMobileItems hidden sm:hidden">
          <div class="flex flex-col mx-2 rounded-md divide-y-2">
            <a class="scroll text-lg hover:text-[#4569D9] active transition-all duration-300 rounded-md p-3.5" href="#introducao">Introdução</a>
            <a class="scroll text-lg hover:text-[#4569D9] transition-all duration-300 rounded-md p-3.5" href="#funcionamento">Como Funciona</a>
            <a class="scroll text-lg hover:text-[#4569D9] transition-all duration-300 rounded-md p-3.5" href="#contato">Contate-nos</a>

            <a class="font-bold bg-gradient-to-r from-blue-600 to-purple-500 text-white hover:shadow-2xl transition-all ease-linear duration-300 rounded-md p-3.5 text-lg" href="https://sistema.liguetalk.com.br/index.php">Logar</a>
          </div>
        </div>
      </nav>
    </header>

    <div id="introducao" class="container mx-auto p-4 px-12 overflow-x-hidden">
      <div class="grid grid-cols-1 md:grid-cols-2 sm:px-12 sm:py-12 sm:gap-x-8 md:py-16">
        <div data-sal="flip-right" data-sal-delay="300" data-sal-easing="ease" style="--sal-duration: 600ms;" class="w-full p-3">
          <img class="mx-auto w-full lg:max-w-xl" src="img/pc.png" alt="" />
        </div>
        <div data-sal="slide-left" data-sal-delay="300" data-sal-easing="ease" style="--sal-duration: 350ms;" class="py-12 text-base leading-6 space-y-4 text-gray-800 sm:text-lg sm:leading-7 mx-auto">
          <h1 class="text-3xl font-bold text-[#333] pb-3">Reduza o esforço, ligue apenas para quem se interessa</h1>
          <ul class="list-disc space-y-2">
            <li class="flex items-start">
              <span class="h-6 flex items-center sm:h-7">
                <svg class="flex-shrink-0 h-5 w-5 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </span>
              <p class="ml-2">
                Evite
                <span class="font-bold text-gray-800">agressividade de discagem</span>
              </p>
            </li>
            <li class="flex items-start">
              <span class="h-6 flex items-center sm:h-7">
                <svg class="flex-shrink-0 h-5 w-5 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </span>
              <p class="ml-2">
                Mantenha o
                <span class="font-bold text-gray-800">bom relacionamento</span>
                com o cliente
              </p>
            </li>
            <li class="flex items-start">
              <span class="h-6 flex items-center sm:h-7">
                <svg class="flex-shrink-0 h-5 w-5 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </span>
              <p class="ml-2">Divulgue seu produto com <span class="font-bold text-gray-800">custo mínimo</span></p>
            </li>
            <li class="flex items-start">
              <span class="h-6 flex items-center sm:h-7">
                <svg class="flex-shrink-0 h-5 w-5 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </span>
              <p class="ml-2"><span class="font-bold text-gray-800">Reduza</span> os gastos com telefonia</p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Citação -->
    <div class="overflow-x-hidden">
      <div data-sal="slide-up" data-sal-delay="600" data-sal-easing="ease" style="--sal-duration: 1s;" class="w-full bg-gradient-to-r from-blue-600 to-purple-500">
        <h2 class="px-4 py-16 leading-snug align-middle sm:py-14 font-bold text-white text-3xl italic sm:text-4xl text-center">"Uma ferramenta útil para todo tipo de Contact Center"</h2>
      </div>
    </div>

    <!-- Pontos Chave -->
    <div id="funcionamento" class="overflow-x-hidden">
      <article data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease" style="--sal-duration: 1s;" class="p-7 text-center">
        <div>
          <i class="bi bi-record-circle iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">1: Crie um áudio</h2>
        <p class="text-gray-600">Descreva o seu produto/promoção diretamente no programa ou carregue um arquivo na Sessão Áudio</p>
      </article>

      <article data-sal="slide-left" data-sal-delay="600" data-sal-easing="ease" style="--sal-duration: 1s;" class="p-7 text-center">
        <div>
          <i class="bi bi-card-checklist iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">2: Crie uma lista</h2>
        <p class="text-gray-600">Siga o modelo disponível na Sessão Lista para importar os telefones que devem ser contatados</p>
      </article>

      <article data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease" style="--sal-duration: 1s;" class="p-7 text-center">
        <div>
          <i class="bi bi-box-arrow-in-up iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">3: Crie uma campanha</h2>
        <p class="text-gray-600">Basta associar o áudio e a lista dentro da campanha e começar a discar. A campanha pode ser pausada quando necessário e uma vez concluída, pode ser reiniciada somente para os números não alcançados na primeira discagem</p>
      </article>

      <article data-sal="slide-left" data-sal-delay="600" data-sal-easing="ease" style="--sal-duration: 1s;" class="p-7 text-center">
        <div>
          <i class="bi bi-chat-left-text iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">4: Leed</h2>
        <p class="text-gray-600">Muita coisa pode acontecer em uma ligação, por isso o operador dispõe do recurso led para registrar o que foi falado. Pode agendar um retorno no sistema, atualizar dados cadastrais, ou simplesmente como softphone</p>
      </article>

      <article data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease" style="--sal-duration: 1s;" class="p-7 text-center">
        <div>
          <i class="bi bi-zoom-in iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">5: Acompanhe os resultados</h2>
        <p class="text-gray-600">Veja os gráficos gerenciais para saber como estão indo as ligações, os operadores e o resultado final.</p>
      </article>

      <article data-sal="slide-left" data-sal-delay="600" data-sal-easing="ease" style="--sal-duration: 1s;" class="p-7 text-center">
        <div>
          <i class="bi bi-headset iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">6: Monitore</h2>
        <p class="text-gray-600">Escute as gravações das ligações e saiba como seu operador está negociando. Além de poder realizar a monitoração do ramal de forma online, durante a ligação.</p>
      </article>
    </div>

    <!-- Formulário de contato -->

    <div id="contato">
      <h2>Deixe seu recado e entraremos em contato!</h2>
      
      <form>
        <div class="form__inputs--wrapper">
          <input class="sm:col-span-1 ml-auto" type="text" name="nome" placeholder="Nome" required/>
          <input class="sm:col-span-1 mr-auto inputphone" type="text" name="telefone" placeholder="Telefone" required/>
          <input class="mx-auto" type="email" name="email" placeholder="Email" required />

          <textarea name="mensagem" placeholder="Mensagem" name="mensagem" cols="30" rows="10" required></textarea>
        </div>
        
        <button id="btnEnviar">Enviar</button>

      </form>
      

      <script>
            var nome = $('form [name="nome"]') 
            var email = $('form [name="email"]')
            var telefone = $('form [name="telefone"]')
            var mensagem = $('form [name="mensagem"]')

            var inputs = [nome, email, telefone, mensagem]

            // Resetar campos que estão mudando
            $(inputs).each(function(){
              $(this).keypress(function(){
                $(this).css('outline', 'none').css('background-color', '#fff')
                $(this).removeClass('placeholder-red')
              })
            })


          // Ação de clique no botão de envio do formulário
          $('form button').click(function(e){
            e.preventDefault();


            $(inputs).each(function(){
                $(this).css('outline', 'none').css('background-color', '#fff')
                $(this).removeClass('placeholder-red')
              })


            if(nome.val().length == 0){
              nome.css('outline','2px solid #ef4444').css('background-color', '#ffd7d7');
              nome.addClass('placeholder-red')

            }
            if(telefone.val().length == 0){
              telefone.css('outline','2px solid #ef4444').css('background-color', '#ffd7d7');
              telefone.addClass('placeholder-red')

            }
            if(email.val().length == 0){
              email.css('outline','2px solid #ef4444').css('background-color', '#ffd7d7');
              email.addClass('placeholder-red')

            }else if(!email.val().match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)){
              email.css('outline','2px solid #ef4444').css('background-color', '#ffd7d7');
              alert('O campo de email precisa ter @ e .')

            }
            if(mensagem.val().length == 0){
              mensagem.css('outline','2px solid #ef4444').css('background-color', '#ffd7d7');
              mensagem.addClass('placeholder-red')

            
            }else{

              var btnEnviar = document.querySelector('#btnEnviar')

              grecaptcha.render(btnEnviar, {
                'sitekey' : '6LcxuYIdAAAAAOjyiqHZnY7yC3GcYjKxAbFas9P9',
                'callback': ajaxEnvio
              });
              $.blockUI({
                  message: 'Aguarde...',
                  css: {
                      border: 'none',
                      padding: '15px',
                      backgroundColor: '#000',
                      '-webkit-border-radius': '10px',
                      '-moz-border-radius': '10px',
                      opacity: .5,
                      color: '#fff'
                  }
              });
              grecaptcha.execute();
            }
          })


          // Callback do Recaptcha pegando o Token
          function ajaxEnvio(token) {
            var response = token;

                $.ajax({
                  type: 'POST',
                  url: 'enviar.php',
                  data: {
                    response: response,
                    nome: nome.val(), 
                    email: email.val(), 
                    telefone: telefone.val(), 
                    mensagem: mensagem.val(), 
                  },
                  success: function (data) {
                    var dataJSON = $.parseJSON(data);
                    console.log(dataJSON.text);
                    $.unblockUI({
                      onUnblock: function(){
                        Swal.fire({
                          title: dataJSON.title,
                          text: dataJSON.text,
                          icon: dataJSON.icon,
                          confirmButtonText: dataJSON.confirmButtonText
                        })
                      }
                    })
                  },
                  error: function(data){
                    var dataJSON = $.parseJSON(data);
                    $.unblockUI({
                      onUnblock: function(){
                        Swal.fire({
                          title: dataJSON.title,
                          text: dataJSON.text,
                          icon: dataJSON.icon,
                          confirmButtonText: dataJSON.confirmButtonText
                        })
                      }
                    })
                  },
                  cache: false
                })
          };


      </script>

    </div>

    <footer>
      <div class="flex justify-center py-5 relative">
        <a href="#topo" class="scroll">
          <figure>
            <img class="h-14 w-full" src="img/logo.png" alt="Logo LigueTalk" />
          </figure>
        </a>
      </div>

      <div class="flex justify-center py-5 text-white bg-gray-800">
        <p>© LigueTalk 2021. Todos direitos reservados.</p>
      </div>
    </footer>


    <div class="fixed bottom-5 right-5 md:bottom-10 md:right-10 z-10" id="popup__wrapper">
      <button id="btn__popup" target="_blank">
        <span class="animate-ping-slow absolute inline-flex h-full w-full rounded-full bg-blue-600 opacity-75 left-0 top-0" style="z-index:-1;"></span>
        <div class="rounded-full p-3 bg-blue-600 hover:bg-blue-700 flex justify-center items-center text-white transition-all duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="white" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <path d="M492.438,397.75l-2.375-7.156c-5.625-16.719-24.063-34.156-41-38.75l-62.688-17.125c-17-4.625-41.25,1.594-53.688,14.031  L310,371.438c-82.453-22.281-147.109-86.938-169.359-169.375l22.688-22.688c12.438-12.438,18.656-36.656,14.031-53.656L160.266,63  c-4.625-16.969-22.094-35.406-38.781-40.969l-7.156-2.406c-16.719-5.563-40.563,0.063-53,12.5L27.391,66.094  c-6.063,6.031-9.938,23.281-9.938,23.344C16.266,197.188,58.516,301,134.734,377.219c76.031,76.031,179.453,118.219,286.891,117.313  c0.563,0,18.313-3.813,24.375-9.844l33.938-33.938C492.375,438.313,498,414.469,492.438,397.75z"/>
          </svg>
        </div>
      </button>

      <div id="popupTelefone" class="hidden absolute right-full w-max z-20 shadow-lg hover:shadow-xl cursor-pointer rounded-lg bg-white p-6 group transition-all duration-300" style="top:-130%;">
        <a href="tel:+08008789668" target="_blank">
          <h3 class="font-bold text-blue-700 text-xl group-hover:text-blue-500 transition-all duration-300">Nos ligue!</h3>
          <address>0800 878 9668</address>
        </a>
        
      </div>
    </div>


    <script>sal();</script>

    <script>
      $(function(){
        $('#btn__popup').click(function(e){
          e.preventDefault();
          $('#popupTelefone').toggleClass('hidden');
        })

        $(window).on('click', function(event){
          if(!$('#popupTelefone').hasClass('hidden')){
            if($(event.target).closest('#popup__wrapper').length == 0){
              $('#popupTelefone').addClass('hidden');
            }
          }
        })
      })
    </script>

    <!-- <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script>

      function googleTranslateElementInit() {
        new google.translate.TranslateElement({  
            pageLanguage: 'br', 
            includedLanguages: 'en,fr,de,es,it',
            autoDisplay: false,
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
      }

    $(document).ready(function(){
       $('#google_translate_element').bind('DOMNodeInserted', function(event) {
           $('.goog-te-menu-value span:first').html('');
       });
    });


</script> -->
  </body>
</html>
