


function Carregarmaterias(){
	//variáveis
	var itens = ""; 
	var itens2 = ""; 
	var url = "	http://davifernandes.profissional.ws/escola/materias.php";
	var tabela = "";
	var materia = "";
	var materia2 = "";
	var psor = "";
    var data = ""; 

    var aluno = localStorage.getItem("aluno");
    //var aluno =1;
    //Capturar Dados Usando Método AJAX do jQuery
    $.ajax({
	    url: url,
	    cache: false,
		crossDomain: true,
		type:"post", 
	    dataType: "json",
	    data:"aluno="+aluno, 
	   
	    success: function(retorno) {
			    //Laço para criar linhas da tabela
			   for(var i = 0; i<retorno.length; i++){
					
				    itens += "<ul>";
					//itens+="<td><button id='"+ retorno[i].id_materia +"' onClick='reply_click(this.id)'>"+ retorno[i].nome_materia +"</button></td>";
					itens+="<li><a id='"+ retorno[i].id_disc +"' onClick='reply_click(this.id)'>"+ retorno[i].nome +"</a></li>";
					//select
					itens += "</ul>";
			  }
			   $("#materia").html(itens);

			     for(var i = 0; i<retorno.length; i++){
					
				    itens2 += "<ul class='collection'>";
					//itens+="<td><button id='"+ retorno[i].id_materia +"' onClick='reply_click(this.id)'>"+ retorno[i].nome_materia +"</button></td>";
					itens2 +="<li 'collection-item'><a class='collection-item' id='"+ retorno[i].id_disc +"' onClick='reply_click(this.id)'>"+ retorno[i].nome +"</a></li>";
					//select
					itens2 += "</ul>";
			  }
			  $("#materiaCola").html(itens2);
			    //Preencher a Tabela	   
	    }
    });
	
}
	function reply_click(clicked_id)
{
   // alert(clicked_id);
    location.href="disciplinas.html";
    localStorage.setItem("materia",clicked_id);
   
}