function echeck(str) {

			var at="@"
			var dot="."
			var lat=str.indexOf(at)
			var lstr=str.length
			var ldot=str.indexOf(dot)
			if (str.indexOf(at)==-1){
			   //alert("Invalid E-mail ID")
			   return false
			}

			if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
			   //alert("Invalid E-mail ID")
			   return false
			}

			if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
				//alert("Invalid E-mail ID")
				return false
			}

			 if (str.indexOf(at,(lat+1))!=-1){
				//alert("Invalid E-mail ID")
				return false
			 }

			 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
				//alert("Invalid E-mail ID")
				return false
			 }

			 if (str.indexOf(dot,(lat+2))==-1){
				//alert("Invalid E-mail ID")
				return false
			 }
			
			 if (str.indexOf(" ")!=-1){
				//alert("Invalid E-mail ID")
				return false
			 }

			 return true					
		}

	function textCounter(field, maxlimit) {
		if (field.value.length > maxlimit) { // if too long...trim it!
			field.value = field.value.substring(0, maxlimit);
			// otherwise, update 'characters left' counter
		} else {
			d = document.getElementById("divResultadoContador");
			d.innerHTML = maxlimit - field.value.length;
		}
	}

	function checkform_contato ( form )
	{


	var continuar = true;
	var mensagem = "Ocorreram os seguintes erros:\n"

			if (form.nome.value == "") {
			mensagem = mensagem + 'Preencha o nome\n';
			form.nome.style.backgroundColor='#FFFF99';
			continuar = false;
			}

			if (form.email.value == "") {
			mensagem = mensagem +  'Digite o endereco de e-mail\n';
			form.email.style.backgroundColor='#FFFF99';
			continuar = false;
			} else {
				if (echeck(form.email.value)==false){
				mensagem = mensagem + 'Preencha corretamente o endereco de e-mail\n';
				continuar = false;
				}
			}
			
			if (form.telefone.value == "") {
			mensagem = mensagem + 'Preencha o numero do telefone de contato\n';
			form.telefone.style.backgroundColor='#FFFF99';
			continuar = false;
			}
			

			if (form.mensagem.value == "") {
			mensagem = mensagem + 'Prencha a mensagem que deseja enviar\n';
			form.mensagem.style.backgroundColor='#FFFF99';
			continuar = false;
			}
			
		if (continuar) {
			return true;
		} else {
			alert(mensagem);
			return false;
		}

	}
