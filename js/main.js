$(document).ready(function(){

    //$("blockquote").append("<i class='fa fa-quote-left' aria-hidden='true'></i>");

    $("#svg-map a.hasRepresentante").click(function(){

        var estado = $(this).attr("xlink:href");
        var loader = "<div class='box-loader'><img src='imgs/loader.gif'></div>";
        var conteudo = $(estado).html();

        if(!$(this).hasClass("selecionado"))
        {

            //Removendo o estado anterior selecionado
            $(".selecionado").removeClass("selecionado");            
            //Adicionando classe selecionada para evitar o recarregamento para um estado já carregado
            $(this).addClass("selecionado");

            //Limpando o conteúdo e adicionando o loader...
            $(".info-box-estado").html(loader);
            
            //Simulando o carregamento...
            setTimeout(function(){

                //Removendo o loader e adicionando o conteúdo...
                $(".info-box-estado").html(conteudo);
                
                //Removendo a classe mostrarEstado de algum estado antes selecionado
                //$(".box-estado").removeClass("mostrarEstado");  
                //Se o estaoo clicado não já possuir a classe, então adiciona
                //if(!$(estado).hasClass("mostrarEstado"))
                //{
                //    $(estado).addClass("mostrarEstado");
                //}                     

            }, 300);

        }//endif

        //console.log(estado);
        return false;

    });//

});//