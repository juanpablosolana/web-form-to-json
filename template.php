    <!-- Main content -->
	
    <section class="content container-fluid">
	<form action="json.php" method="post">
	  <fieldset>
	<legend>Artículo</legend>
	Artículo: <input type="text" name="kArticulo" placeholder="Artículo"  autofocus required pattern="[A-Za-z0-9]{1,15}" title="El artículo debe contener un  máximo: 15" />
	Luchas :  <input type="text" name="luchasReales" placeholder="Luchas"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
        Luchas fuera :  <input type="text" name="luchasFueraTelar" placeholder="Luchas fuera"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />

	<br/>
	 Clase :
             <select id = "kClaseTela" name="kClaseTela" requiered>
               <option value = "P">P</option>
               <option value = "C">C</option>
             </select>
	   Sala tejido :
             <select id = "kSalaTejido" name="kSalaTejido" requiered>
              <option value = "0001">0001</option>
              <option value = "0002">0002</option>
		<option value = "0003">0003</option>
              <option value = "0004">0004</option>
		<option value = "0005">0005</option>
              <option value = "0006">0006</option>
		<option value = "0007">0007</option>
              <option value = "0010">0010</option>
		<option value = "0096">0096</option>
              <option value = "D2">D2</option>
                <option value = "D4">D4</option>
              <option value = "G6">G6</option>
                <option value = "L8">L8</option>
              <option value = "SIE">S1E</option>
                <option value = "S1M4">S1M4</option>
              <option value = "S2">S2</option>
		<option value = "S2M2">S2M2</option>
              <option value = "S2M4">S2M4</option>
                <option value = "S2M6">S2M6</option>
              <option value = "S3M6">S3M6</option>
                 <option value = "S4">S4</option>
              <option value = "S4M6">S4M6</option>
                 <option value = "S6">S6</option>
         </select>
	  Divisor :  <input type="text" name="divisor" placeholder="Divisor"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
        <br/><br>
	<legend>Grasa</legend>
	  Gramos:  <input type="text" name="grGrasa" placeholder="Gramos"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
          Metros:  <input type="text" name="mtsGrasa" placeholder="Metros"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	<br/><br>
	  <legend>Acabado</legend>
          Gramos:  <input type="text" name="grAcabado" placeholder="Gramos"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
          Metros:  <input type="text" name="mtsAcabado1" placeholder="Metros"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	<br>
	<legend>Complementos</legend>
          Ancho:  <input type="text" name="anchoTelar" placeholder="ancho"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
          Metros urdido: <input type="text" name="mtsUrdido" placeholder="Metros"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	 Metros tejido: <input type="text" name="mtsTejido" placeholder="Metros"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	<br>
	Metros acabado: <input type="text" name="mtsAcabdo" placeholder="Metros"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	Temporada:
             <select id = "temporada" name="temporada" requiered>
               <option value = "P">Primavera</option>
               <option value = "V">Verano</option>
		<option value = "O">Otoño</option>
		<option value = "I">Invierno</option>

             </select>
</fieldset>
	<input type="submit" value="Guardar" />
	</p>
	<!-- Barra de progreso
  	<progress max="100" value="95">
	-->
	</fieldset>
	</form>
