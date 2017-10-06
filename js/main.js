$(document).ready(function(){

    /*
    //submenu hover
    $(".menu").find("li").hover(function(){
        //on hover
        $(this).find(".submenu").css({"display":"block", "visibility":"visible"}).stop().animate({
            opacity: 1
        }, 200, "easeInOutQuad", function(){});
    }, function(){
        //on out
        $(this).find(".submenu").stop().animate({
            opacity: 0
        }, 200, "easeInOutQuad", function(){
            $(this).css({"display":"none", "visibility":"hidden"})
        });
    });

    //menu-submenu hover
    $(".submenu").find("li").hover(function(){
        //on hover
        $(this).find(".menu-submenu").css({"display":"block", "visibility":"visible"}).stop().animate({
            opacity: 1
        }, 300, "easeInOutQuad", function(){});
    }, function(){
        //on out
        $(this).find(".menu-submenu").stop().animate({
            opacity: 0
        }, 300, "easeInOutQuad", function(){
            $(this).css({"display":"none", "visibility":"hidden"})
        });
    }); 
    */   

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

    $("#selectEstadosRepresentantes").change(function() {
        
        var estado = $(this).val();
        var loader = "<div class='box-loader'><img src='imgs/loader.gif'></div>";
        var conteudo = $("#" + estado).html();
        
        //Limpando o conteúdo e adicionando o loader...
        $(".info-box-estado-mobile").html(loader);
        
        //Simulando o carregamento...
        setTimeout(function(){
            //Removendo o loader e adicionando o conteúdo...
            $(".info-box-estado-mobile").html(conteudo);
        }, 300);

        //console.log($(this).val());
    });


    var menuMobile = $(".menu-mobile");
    //Menu Mobile
    $("#icon-mobile").on("click", function(){
        //Inserindo bg fade no body
        $("body").append("<div class='bg-fade'></div>");
        //ANimando Bg Fade e mostrando o menu
        $(".bg-fade").stop().animate({opacity: 1}, 150, "easeInOutQuad", function(){
            menuMobile.stop().animate({
                right: 0
            }, 300, "easeInOutQuad", function(){
                //adicionando a classe menu ativo
                $("body").addClass("menu-ativo");
            });
        });//
    });//

    $("#close").on("click", function(){
        menuMobile.stop().animate({
            right: -300
        }, 300, "easeInOutQuad", function(){
            $(".bg-fade").stop().animate({opacity: 0}, 150, "easeInOutQuad", function(){
                $("body").removeClass("menu-ativo");
                $(this).remove();
            });
        }); 
    });//

    // $(".menu-mobile").find(".hasMenuSub").on("click", function(){

    //     if(!$(this).hasClass("submenu-ativo"))
    //     {
    //         $(this).stop().animate({
    //             height: "102px"
    //         }, 200, function(){
                
    //         });
    //     }else{

    //         $(this).stop().animate({
    //             height: "34px"
    //         }, 200, function(){
    //             $(this).removeClass("submenu-ativo");
    //         });                
    //     }

    // });

});//