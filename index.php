<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TailWind LigueTalk</title>

    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./node_modules/block-ui/jquery.blockUI.js"></script>

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
      <nav class="fixed inset-x-0 top-0">
        <div class="relative bg-white top-0 inset-x-0 z-10 flex p-5 md:px-12 lg:px-16 xl:max-w-screen-2xl xl:mx-auto justify-between items-center border-b shadow-md">
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

    <div id="introducao" class="container mx-auto p-4 px-12">
      <div class="grid grid-cols-1 md:grid-cols-2 sm:px-12 sm:py-12 sm:gap-x-8 md:py-16">
        <div class="w-full p-3">
          <img class="mx-auto w-full lg:max-w-xl" src="img/pc.png" alt="" />
        </div>
        <div class="py-12 text-base leading-6 space-y-4 text-gray-800 sm:text-lg sm:leading-7 mx-auto">
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
    <div class="w-full bg-gradient-to-r from-blue-600 to-purple-500">
      <h2 class="px-4 py-16 leading-snug align-middle sm:py-14 font-bold text-white text-3xl italic sm:text-4xl text-center">"Uma ferramenta útil para todo tipo de Contact Center"</h2>
    </div>

    <!-- Pontos Chave -->
    <div id="funcionamento">
      <article class="p-7 text-center">
        <div>
          <i class="bi bi-record-circle iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">1: Crie um áudio</h2>
        <p class="text-gray-600">Descreva o seu produto/promoção diretamente no programa ou carregue um arquivo na Sessão Áudio</p>
      </article>

      <article class="p-7 text-center">
        <div>
          <i class="bi bi-card-checklist iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">2: Crie uma lista</h2>
        <p class="text-gray-600">Siga o modelo disponível na Sessão Lista para importar os telefones que devem ser contatados</p>
      </article>

      <article class="p-7 text-center">
        <div>
          <i class="bi bi-box-arrow-in-up iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">3: Crie uma campanha</h2>
        <p class="text-gray-600">Basta associar o áudio e a lista dentro da campanha e começar a discar. A campanha pode ser pausada quando necessário e uma vez concluída, pode ser reiniciada somente para os números não alcançados na primeira discagem</p>
      </article>

      <article class="p-7 text-center">
        <div>
          <i class="bi bi-chat-left-text iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">4: Leed</h2>
        <p class="text-gray-600">Muita coisa pode acontecer em uma ligação, por isso o operador dispõe do recurso led para registrar o que foi falado. Pode agendar um retorno no sistema, atualizar dados cadastrais, ou simplesmente como softphone</p>
      </article>

      <article class="p-7 text-center">
        <div>
          <i class="bi bi-zoom-in iconeBS text-8xl"></i>
        </div>
        <h2 class="pt-5 text-xl font-bold">5: Acompanhe os resultados</h2>
        <p class="text-gray-600">Veja os gráficos gerenciais para saber como estão indo as ligações, os operadores e o resultado final.</p>
      </article>

      <article class="p-7 text-center">
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

          $('form button').click(function(e){
            e.preventDefault();

            var nome = $('form [name="nome"]') 
            var email = $('form [name="email"]')
            var telefone = $('form [name="telefone"]')
            var mensagem = $('form [name="mensagem"]')

            if(nome.val().length == 0){
              nome.css('border','2px solid #ef4444');

              telefone.css('border', 'none')
              email.css('border', 'none')
              mensagem.css('border', 'none')

            }else if(telefone.val().length == 0){
              telefone.css('border','2px solid #ef4444');

              nome.css('border', 'none')
              email.css('border', 'none')
              mensagem.css('border', 'none')

            }else if(email.val().length == 0){
              email.css('border','2px solid #ef4444');

              nome.css('border', 'none')
              telefone.css('border', 'none')
              mensagem.css('border', 'none')

            }else if(!email.val().match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)){
              email.css('border','2px solid #ef4444');

              nome.css('border', 'none')
              telefone.css('border', 'none')
              mensagem.css('border', 'none')

              alert('O campo de email precisa ter @ e .!')

            }else if(mensagem.val().length == 0){
              mensagem.css('border','2px solid #ef4444');

              
              nome.css('border', 'none')
              telefone.css('border', 'none')
              email.css('border', 'none')
            
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

          function ajaxEnvio(token) {
            var response = token;
            var nome = $('form [name="nome"]') 
            var email = $('form [name="email"]')
            var telefone = $('form [name="telefone"]')
            var mensagem = $('form [name="mensagem"]')

            console.log(nome.val().length)

            if(nome.val().length == 0){
              nome.css('border','2px solid red');
            }else if(email.val().length == 0){
              email.css('border','2px solid red');
            }else if(telefone.val().length == 0){
              telefone.css('border','2px solid red');
            }else if(mensagem.val().length == 0){
              mensagem.css('border','2px solid red');
            }else{

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
                  // beforeSend : function(){
                  //   $.blockUI({
                  //       message: 'Aguarde...',
                  //       css: {
                  //           border: 'none',
                  //           padding: '15px',
                  //           backgroundColor: '#000',
                  //           '-webkit-border-radius': '10px',
                  //           '-moz-border-radius': '10px',
                  //           opacity: .5,
                  //           color: '#fff'
                  //       }
                  //   });
                  // },
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
            }
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
