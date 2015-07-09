
		function formatar_mascara(src, mascara)
		{
			var campo = src.value.length;
			var saida = mascara.substring(0,1);
			var texto = mascara.substring(campo);
			if(texto.substring(0,1) != saida)
			{
				src.value += texto.substring(0,1);
			}
		}

		function Formatadata(Campo, teclapres)
		{
			var tecla = teclapres.keyCode;
			var vr = new String(Campo.value);
			vr = vr.replace("/", "");
			vr = vr.replace("/", "");
			vr = vr.replace("/", "");
			tam = vr.length + 1;
			if (tecla != 8 && tecla != 8)
			{
				if (tam > 0 && tam < 2)
					Campo.value = vr.substr(0, 2) ;
				if (tam > 2 && tam < 4)
					Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2);
				if (tam > 4 && tam < 7)
					Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2) + '/' + vr.substr(4, 7);
			}
		}

		function mascara_telefone(nm_campo)
		{
			tam_campo = (nm_campo.value).length;
			if(tam_campo == '')
				nm_campo.value = nm_campo.value + "(";
			if(tam_campo == 3)
				nm_campo.value = nm_campo.value + ")";
			if(tam_campo == 8)
				nm_campo.value = nm_campo.value + "-";
		}

		function abrejanela(endereco, janela, parametros)
		{
			var desktop = window.open(endereco, janela, parametros);
		}
