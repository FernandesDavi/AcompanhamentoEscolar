function carregar(){
	//variáveis
	var itens = "", url = "	http://davifernandes.profissional.ws/escola/dados.php";
	var tabela = "";
	var materia = "";
	var turma = "";
	var psor = "";
    var data = ""; 

    var mat = 1;
    var aluno = localStorage.getItem("aluno");
    //Capturar Dados Usando Método AJAX do jQuery
    $.ajax({
	    url: url,
	    cache: false,
		crossDomain: true,
	    dataType: "json",
	    data:"aluno="+aluno+"&materia="+mat, 
	    
	    beforeSend: function() {
		    $("h2").html("Carregando..."); //Carregando
	    },
	    error: function(data) {
			this.data = data;
			console.log(data);
		    $("h2").html("Há algum problema com a fonte de dados");
	    }
	  
		    else{ 

					materia = retorno[0].disciplina;
					turma = retorno[0].turma;
					psor = retorno[0].professor;
					itens += "<tr>";

			    //Laço para criar linhas da tabela
			   for(var i = 0; i<retorno.length; i++){
					
				    
					    //itens += "<td>" + retorno[i].id_notas + "</td>";
					    itens += "<td colspan='2'><b>" + retorno[i].avaliacao_nome + "</b></td>";
					    itens += "<td>" + retorno[i].data + "</td>";
					    itens += "<td>" + retorno[i].calculo + "</td>";
					    itens += "<td><b>" + retorno[i].nota + "</b></td>";
					
					   
				
			  }
			  	itens += "</tr>";
			    //Preencher a Tabela
				 $("#materia").html(materia);
				 $("#turma").html(turma);
				 $("#prof").html(psor);
			    $("#minhaTabela thead").html(itens);
			    
			    
		    }
	    }
    });
	
	


	
}

function teste(){

	console.log(asdfg);
}