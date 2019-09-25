
<script>

function start()
{
    var input_total = document.getElementById("input_total"),
	    input_datavenda = document.getElementById("input_datavenda"),
	    input_parcelas = document.getElementById("input_parcelas"),
	    input_venc = document.getElementById("input_venc"),
	    select_op = document.getElementById("select_op"),
	    boletos_set = document.getElementById("boletos_set"),
	    din_set = document.getElementById("din_set"),
	    id_index = 0;
	input_total.focus();
	input_total.placeholder = "Digite o total";
	input_total.onblur = function()
	{
		input_datavenda.focus();
		input_datavenda.placeholder = "Selecione vencimento"
	}
	input_datavenda.onblur = function()
	{
		input_parcelas.focus();
		input_parcelas.onblur = function()
		{
			input_venc.focus();
			input_venc.onblur = function()
			{
				select_op.focus();
				select_op.onchange = function()
				{
					/*Calculo Parcela*/
		  			input_total = parseFloat(input_total.value);
		  			input_parcelas = document.getElementById("input_parcelas").value;
		  			var divisao = parseFloat((input_total / input_parcelas).toFixed(2));
		  			for(i=0;i<input_parcelas;i++)
		                        {
		            	                /*Calculo Datas*/
		               	                var s_datavenda = new Date(input_datavenda.value);
		             	                s_datavenda.setUTCDate(s_datavenda.getUTCDate() + (parseInt(input_venc.value)));	
			           	        s_datavenda.setUTCMonth(s_datavenda.getUTCMonth() + id_index);
			           	        var dia = s_datavenda.getUTCDate();
				  		var mes = s_datavenda.getUTCMonth() + 1;
						var ano = s_datavenda.getUTCFullYear();
						/*Input dinamico com label*/
		                                var din_input_dt_venc = document.createElement("input");
			           	        var din_input_parc_num = document.createElement("input");
			                	var din_input_parc_val = document.createElement("input");
			                	var din_label_d_venc = document.createElement("Label");
			                	var din_label_dt_venc = document.createElement("Label");
			                 	var din_label_parc_num = document.createElement("Label");
			           	        var din_label_parc_val = document.createElement("Label");
		           		        id_index++;
		           		        din_input_dt_venc.type = "text";
		           		        din_input_dt_venc.id = "din_input_dt_venc" + id_index;
		           		        din_input_dt_venc.value = dia + "/" + mes +"/" + ano;
         		           		din_input_parc_num.type = "number";
		           		        din_input_parc_num.id = "din_input_parc_num" + id_index;
		                	        din_input_parc_num.value = id_index;
		                		din_input_parc_val.type = "number";
	                                        din_input_parc_val.id = "din_input_parc_val" + id_index;
    	           		                din_input_parc_val.value = divisao;
   		           	        	din_label_dt_venc.htmlFor = "d_venc"+id_index;
		  				din_label_dt_venc.appendChild(document.createTextNode("Data do Vencimento"));
		  				din_label_parc_num.htmlFor = "d_venc"+id_index;
		  				din_label_parc_num.appendChild(document.createTextNode("Nº parcela"));
		  				din_label_parc_val.htmlFor = "d_venc"+id_index;
		  				din_label_parc_val.appendChild(document.createTextNode("Valor parcela"));
		  				din_set.appendChild(din_label_dt_venc);
		  				din_set.appendChild(din_input_dt_venc);
		  				din_set.appendChild(din_label_parc_num);
		  				din_set.appendChild(din_input_parc_num);
		  				din_set.appendChild(din_label_parc_val);
		  				din_set.appendChild(din_input_parc_val);
		  				din_set.appendChild(document.createElement("br"));	
					}
				}	
			}
  		}
	}
}


</script>

<body onload="start()">
	<form>
		<fieldset>
			<legend>Controle de Boletos</legend></br>
			<label for="input_total">Total:</label>
			<input type="number" id="input_total"/>
			<label for="input_datavenda">Data Venda:</label> 
			<input type="text" id="input_datavenda" placeholder = "Selecione vencimento" onfocus="(this.type='date')"/>
			<label for="input_parcelas">Parcelas:</label> 
			<input type="number" id="input_parcelas" placeholder = "Digite o nº de parcelas"/>
			<label for="input_venc">Dias para o vencimento</label> 
			<input type="number" id="input_venc" placeholder = "Digite o dia do vencimento"/>
			<select id="select_op">
        		    <option value="1">BOLETO BANCÁRIO</option>
        		    <option value="2">DINHEIRO</option>
        		    <option value="3">CHEQUE</option>
        		    <option value="4">CARTÃO</option>
         	        </select><br/><br/><br/><br/>
			<hr/><br/>
			<fieldset id="boletos_set">
				<legend>Boletos :</legend>
				<fieldset id="din_set" style="border:none;">
					
				</fieldset>
			</fieldset>
			
		</fieldset>
	</form>
</body>